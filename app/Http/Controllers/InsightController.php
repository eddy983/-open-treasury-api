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
        $this->middleware('auth:api');        
    }
    /**
     * Duplicate Payments to same Beneficiary
     * 
     * Instances where several payments were made on the same day to the same beneficiary
     */
    public function multiplePayments()
    {
        //$payments = Treasury::whereColumn('beneficiary_name','=','beneficiary_name')->limit(10)->get();
        //$payments = Treasury::select('beneficiary_name', 'id')->groupBy('beneficiary_name')->limit(10)->get();
        $payments = Treasury::select('beneficiary_name')->distinct()->get()->count();
        return response()
                ->json(compact('payments'));
    }

    /**
     * Payments without names
     * 
     * Identifying payments amounts which do not indicate ministry name, organization, and beneficiary name
     * 
     * @queryParam  count int The number of records to return. Example 10
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
