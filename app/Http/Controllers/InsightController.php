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
     */
    public function multiplePayments()
    {
        $limit = isset($_GET['limit']) ? $_GET['limit'] : 20;
        echo \Carbon\Carbon::now();
        //$payments = Treasury::whereColumn('beneficiary_name','=','beneficiary_name')->limit(10)->get();
        $payments = Treasury::select(\DB::raw('beneficiary_name, count(*)'))
                            ->groupBy('beneficiary_name')
                            ->orderBy('count(*)', 'DESC')
                            ->limit($limit)
                            ->get();
        foreach($payments as $payment){
            $result = \DB::select("SELECT date, count(*) AS count FROM treasuries 
            where beneficiary_name = '$payment->beneficiary_name'
            GROUP BY date;");
            dump($result);
        }
        //$payments = Treasury::select('beneficiary_name')->distinct()->get()->count();
        dump($payments);
        echo \Carbon\Carbon::now();
        //return response()
        //        ->json(compact('payments'));
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
