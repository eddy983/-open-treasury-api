<?php

namespace App\Http\Controllers;

use \Carbon\Carbon;
use App\Treasury;
use App\Service\InsightService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class InsightController extends Controller
{
    private $excludes = [];

    /**
     * Create a new AuthController instance.
     *
     * @group  Analytics
     * 
     * @return void
     */
    public function __construct()
    {        
        $this->middleware('auth:api');
        $this->excludes = [
            "ltd", "LIMITED","limited","LTD","NAF","MINISTRY","FEDERAL","AGENCY", "NATIONAL","DEPARTMENT",
            "NIGERIA", "NIGERIAN","ASSOCIATION","UNION","COOP","TAX","IBTC","NHF","Pension","IPPIS","NAFDAC",
            "STAFF", "DEDUCTION", "NHIS", "NUC", "CTSS", "CTLS", "BOND", "LOAN", "INSTITUTE", "REVENUE",
            "COOPERATIVE", "SOCIETY", "FAAC", "COMMISSION", "NAF", "BURSARY", "BANK", "UNIVERSITY", "ELECTRICITY",
            "CBN", "OFFICE", "SECTOR", "DEFENCE", "CTCS", "STATE", "COUNCIL", "COLLEGE", "FERMA", "WELFARE",
            "COMMUNICATIONS", "CTSS", "NHIS", "PTAD", "RNA","PRESIDENTIAL", "OSGOF", "FUND", "FMC", "Deduction",
            "RESEARCH","TRAINING","AUTHORITY", "PLC", "BUK","& CO","MULTIPURPOSE","ICPC","FCF"
        ];        
    }
    /**
     * Duplicate Payments to same Beneficiary
     * 
     * Instances where several payments were made on the same day to the same beneficiary
     *  
     * @group  Analytics
     * 
     * @queryParam  count int The number of records to return. Example 10
     * @queryParam  page int The page of the records . Example 2
     */
    public function multiplePayments()
    {
        $count = isset($_GET['count']) ? $_GET['count'] : 10;
        $start_time =  \Carbon\Carbon::now();
        
        $payments = Treasury::select(\DB::raw('beneficiary_name, count(*) AS count, SUM(amount) as totalAmountPaid'))
                            ->groupBy('beneficiary_name')
                            ->orderBy('count', 'DESC')
                            //->limit($limit)
                            ->paginate($count);
        $results = [];
        foreach($payments as $payment){
            $result = \DB::select("SELECT date, count(*) AS count, SUM(amount) as totalAmountPaid FROM treasuries 
            where beneficiary_name = '$payment->beneficiary_name'
            GROUP BY date;");
             
            $payment->number_of_times = count($result);
            $payment->result = $result; 
        } 
        $end_time = \Carbon\Carbon::now();
        return response()
                ->json(compact('payments'));
    }

    /**
     * Payments without names
     * 
     * Identifying payments amounts which do not indicate ministry name, organization, and beneficiary name
     * 
     * @group  Analytics
     * 
     * @queryParam  count int The number of records to return. Example 10
     * @queryParam  category string Narrow result down to category. Example beneficiary_name,organization_name,mother_ministry
     * @queryParam  page int The page of the records. Example 3
     * @queryParam  start_date string Start Date. Example 2018-09-27
     * @queryParam  search_term string Narrow Result down by a search term. Example Youths society
     */

    public function withoutNames(Treasury $treasury)
    {
        extract($_GET);
        
        $count = $count ?? 10; 

        $validator = \Validator::make([
            "category" => $category ?? null,
            "search_term" => $search_term ?? null,
            "start_date" => $start_date ?? null,
            "end_date" => $end_date ?? null,
            "count" => $count
        ], [
            'category' => 'nullable|string|in:beneficiary_name,description,organization_name,mother_ministry',
            'search_term' => 'nullable|string|max:100',
            'start_date' => 'nullable|date_format:Y-m-d',
            'end_date' => 'nullable|date_format:Y-m-d|required_with:start_date',
            'count' => 'required|integer'
        ]);
        if ($validator->fails()) {
            return response()
                        ->json(["errors"=>$validator->errors()]);
        }

        $payments = $treasury->newQuery();

        if(isset($start_date) && isset($end_date) && !is_null($start_date) && !is_null($end_date)){ 
            $start_date = Carbon::parse($start_date)->toDateTimeString();
            $end_date = Carbon::parse($end_date)->toDateTimeString();
            $payments->whereBetween("date", [$start_date, $end_date]); 
        }

        if(isset($category) && !is_null($category)){
            Log::info("cat");
            $payments->where($category, '=', ''); 
        }else{ 
            $payments->where('beneficiary_name', '=', '')
                        ->orWhere('organization_name', '=', '')
                        ->orWhere('mother_ministry', '=', '');
        }
        

        
        if (isset($search_term) && !empty($search_term) && !is_null($search_term)) {
            Log::info("hi");
            $payments->whereRaw('MATCH (mother_ministry, organization_name,beneficiary_name,description) AGAINST (?)' , array($search_term));
        }
        
        if( isset($csv) && $csv === "true" ){
            $payments = $payments->orderby('date', 'DESC')->get();
            
            $csvFileName = Str::slug("Multiple_Payments" . (isset($category) ? " by $category" : "") . (isset($search_term) ? " search $search_term" : "") . (isset($start_date) ? " from $start_date" : "") ?? "" . (isset($end_date) ? " to $end_date" : ""), "_") . ".csv";
            
            return $this->exportCSV($payments, $csvFileName);
        }

        $payments = $payments->orderby('date', 'DESC')
                    ->paginate($count);        
        


         
        $description = "Payments without Organization, Beneficiary or Ministry Name";  
        
        
        return response()
                ->json(compact('description','payments'));
    }

    /**
     * Statistics Overview
     * 
     * 
     * @group  Analytics
     *  
     */
    public function overviewStatistics()
    {

        $omitted_details = Treasury::where('beneficiary_name', '=', '')
                                    ->orWhere('organization_name', '=', '')
                                    ->orWhere('mother_ministry', '=', '') 
                                    ->count();

        $personalAccounts = Treasury::where(function($query) {
            foreach($this->excludes as $exclude){
                $query->where('beneficiary_name', 'not like', "%$exclude%");
            }            
        })->count();
        
        return response()
            ->json(compact('omitted_details','personalAccounts'));
    }

    /**
     * Personal Account payments
     * 
     * Payments to individual personal accounts
     * 
     * @group  Analytics
     * 
     * 
     * @queryParam  count int The number of records to return. Example 25
     * @queryParam  page int The page of the records. Example 5
     *  
     */
    public function personalAccounts()
    {
        $count = isset($_GET['count']) ? $_GET['count'] : 10;
         
        $treasuries = Treasury::where(function($query) {
            foreach($this->excludes as $exclude){
                $query->where('beneficiary_name', 'not like', "%$exclude%");
            }            
        })->orderby('date', 'DESC')->paginate($count); 

        return response()
                ->json(compact('treasuries')); 
    }

    private function exportCSV($collection, $name="test.csv")
    {
        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject);

        $csv->insertOne(array_keys($collection[0]->getAttributes()));
    
        foreach ($collection as $record) {
            $csv->insertOne($record->toArray());
        }

        $filePath = 'csv/' . $name;
        
        Storage::disk('s3')->put($filePath, $this->str_to_stream($csv), [ 'visibility' => 'public']);
        
        $url = Storage::disk('s3')->url($filePath);
         
        return response()
                ->json(compact("url"));
    }

    private function str_to_stream(string $string) 
    {
        $stream = fopen('php://memory','r+');
        fwrite($stream, $string);
        rewind($stream);
        return $stream;
    }
}
