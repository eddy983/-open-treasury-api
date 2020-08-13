<?php

namespace App\Http\Controllers;

use App\Treasury;
use Illuminate\Http\Request;

class InsightController extends Controller
{

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
        
        $payments = Treasury::select(\DB::raw('beneficiary_name, count(*) AS count'))
                            ->groupBy('beneficiary_name')
                            ->orderBy('count', 'DESC')
                            //->limit($limit)
                            ->paginate($count);
        $results = [];
        foreach($payments as $payment){
            $result = \DB::select("SELECT date, count(*) AS count FROM treasuries 
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
     * @queryParam  page int The page of the records. Example 3
     */

    public function withoutNames()
    {
        
        $count = isset($_GET['count']) ? $_GET['count'] : 10;
        $payments = Treasury::where('beneficiary_name', '=', '')
                            ->orWhere('organization_name', '=', '')
                            ->orWhere('mother_ministry', '=', '')
                            ->orderby('date', 'DESC')
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
                                    ->orderby('date', 'DESC')
                                    ->count();
        
        return response()
            ->json(compact('omitted_details'));
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
        $excludes = [
            "ltd", "LIMITED","limited","LTD","NAF","MINISTRY","FEDERAL","AGENCY", "NATIONAL","DEPARTMENT",
            "NIGERIA", "NIGERIAN","ASSOCIATION","UNION","COOP","TAX","IBTC","NHF","Pension","IPPIS","NAFDAC",
            "STAFF", "DEDUCTION", "NHIS", "NUC", "CTSS", "CTLS", "BOND", "LOAN", "INSTITUTE", "REVENUE",
            "COOPERATIVE", "SOCIETY", "FAAC", "COMMISSION", "NAF", "BURSARY", "BANK", "UNIVERSITY", "ELECTRICITY",
            "CBN", "OFFICE", "SECTOR", "DEFENCE", "CTCS", "STATE", "COUNCIL", "COLLEGE", "FERMA", "WELFARE",
            "COMMUNICATIONS", "CTSS", "NHIS", "PTAD", "RNA","PRESIDENTIAL", "OSGOF", "FUND", "FMC", "Deduction",
            "RESEARCH","TRAINING","AUTHORITY", "PLC", "BUK","& CO","MULTIPURPOSE"
        ];

        //Treasury::where
        $treasuries = Treasury::where(function($query) use ($excludes) {
            foreach($excludes as $exclude){
                $query->where('beneficiary_name', 'not like', "%$exclude%");
            }
            
        })->orderby('date', 'DESC')->paginate($count);
         

        return response()
                ->json(compact('treasuries')); 
    }
}
