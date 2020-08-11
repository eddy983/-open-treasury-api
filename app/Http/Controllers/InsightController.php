<?php

namespace App\Http\Controllers;

use App\Treasury;
use Illuminate\Http\Request;

class InsightController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {        
        //$this->middleware('auth:api');        
    }
    /**
     * Duplicate Payments to same Beneficiary
     * 
     * Instances where several payments were made on the same day to the same beneficiary
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
                ->json(compact('start_time', 'end_time','payments'));
    }

    /**
     * Payments without names
     * 
     * Identifying payments amounts which do not indicate ministry name, organization, and beneficiary name
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
}
