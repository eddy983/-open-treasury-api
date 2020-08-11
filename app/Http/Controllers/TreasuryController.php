<?php

namespace App\Http\Controllers;

use App\Treasury;
use Illuminate\Http\Request;

class TreasuryController extends Controller
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
     * A List of treasury payments
     * 
     * Shows a paginated list of payments
     * 
     * @queryParam  count int The number of records to return. Example 10
     * @queryParam  page int The page of the records . Example 2
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Log::info("GET /treasury");
        $count = isset($_GET['count']) ? $_GET['count'] : 10;
    
        $treasuries = Treasury::orderBy("date", "DESC")->paginate($count);
    
        return response()
                ->json(compact("treasuries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Treasury record.
     * 
     * Store a new Treasury payment  record
     * 
     * @bodyParam  date string required The date of the payment.
     * @bodyParam  payment_number string required The payment number.
     * @bodyParam  payer_code int required The Payer Code.
     * @bodyParam  mother_ministry string required The Mother Ministry.
     * @bodyParam  organization_name string required The Organization Name.
     * @bodyParam  beneficiary_name string required The Organization Name.
     * @bodyParam  amount int required The Amount Paid.
     * @bodyParam  description string required The Payment Description.
     * @bodyParam  irregularities string required The Irregularities.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'payment_number' => 'required',
            'payer_code' => 'required|integer',
            'mother_ministry' => 'required',
            'organization_name' => 'required',
            'beneficiary_name' => 'required',
            'description' => 'required',
            'irregularities' => 'required',
            'amount' => 'required|integer',
        ]);
  
        $date = \Carbon\Carbon::createFromFormat("Y-m-d", $request->date);
        $treasury = new Treasury($request->all());
        $treasury->day = $date->day;
        $treasury->month = $date->month;
        $treasury->year = $date->year;


        $treasury->save();
   
        return response()
                ->json(compact("treasury"));
    }

    /**
     * Get a single treasury record.
     * 
     * @urlParam  id required The ID of the treasury record /{id}.
     *
     * @param  \App\Treasury  $treasury
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $treasury = Treasury::find($id);

        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Treasury record with ID ({$id}) doesnt exist"
                    ], 404);
        }
         
        return response()
                ->json(compact("treasury"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Treasury  $treasury
     * @return \Illuminate\Http\Response
     */
    public function edit(Treasury $treasury)
    {
        //
    }

    /**
     * Update a Treasury Record
     * 
     * Update a treasury payment record with specified ID
     * 
     * @urlParam  id required The ID of the treasury record /{id}.
     * 
     * @bodyParam  date string required The date of the payment.
     * @bodyParam  payment_number string required The payment number.
     * @bodyParam  payer_code int required The Payer Code.
     * @bodyParam  mother_ministry string required The Mother Ministry.
     * @bodyParam  organization_name string required The Organization Name.
     * @bodyParam  beneficiary_name string required The Organization Name.
     * @bodyParam  amount int required The Amount Paid.
     * @bodyParam  description string required The Payment Description.
     * @bodyParam  irregularities string required The Irregularities.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Treasury  $treasury
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'date' => 'required|date_format:Y-m-d',
            'payment_number' => 'required',
            'payer_code' => 'required|integer',
            'mother_ministry' => 'required',
            'organization_name' => 'required',
            'beneficiary_name' => 'required',
            'description' => 'required',
            'irregularities' => 'required',
            'amount' => 'required|integer',
        ]);

        $treasury = Treasury::find($id);
        
        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Treasury record with ID ({$id}) doesnt exist"
                    ], 404);
        } 
        $date = \Carbon\Carbon::createFromFormat("Y-m-d", $request->date);
        //$treasury = new Treasury($request->all());
        $request["day"] = $date->day;
        $request["month"] = $date->month;
        $request["year"] = $date->year;
  
        $treasury->update($request->all()); 
        return response()
                ->json(compact("treasury"));
    }

    /**
     * Delete a Treasury Record
     * 
     * Delete a treasury payment record with specified ID
     * 
     * @urlParam  id required The ID of the treasury record /{id}.
     *
     * @param  \App\Treasury  $treasury
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    { 
        $treasury = Treasury::find($id);

        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Treasury record with ID ({$id}) doesnt exist"
                    ], 404);
        }
        
        $treasury->delete();
  
        return response()
                ->json([
                    "message" => "Treasury record with id {$treasury->id} deleted"
                ]);
    }

    /**
     * Search for treasury payments
     * 
     * Shows a paginated list of search result
     * 
     * @queryParam  search_term string Search term. Example ajaokuta
     * @queryParam  start_date string Start Date. Example 2018-09-27
     * @queryParam  end_date string End Date. Example 2018-10-27
     * @queryParam  count int The number of records to return. Example 10
     * @queryParam  page int The page of the records . Example 2
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //Log::info("GET /treasury");
        $count = isset($_GET['count']) ? $_GET['count'] : 10;
        $search_term = isset($_GET['search_term']) ? $_GET['search_term'] : "";
        $start_date = isset($_GET['start_date']) ? $_GET['start_date'] : null;
        $end_date = isset($_GET['end_date']) ? $_GET['end_date'] : null;  
        
        if(!is_null($start_date) && !is_null($end_date)){
            $start_date = \Carbon\Carbon::parse($start_date)->toDateTimeString();
            $end_date = \Carbon\Carbon::parse($end_date)->toDateTimeString();
            $treasuries = Treasury::whereBetween("date", [$start_date, $end_date])
                                    ->whereRaw('MATCH (mother_ministry, organization_name,beneficiary_name,description) AGAINST (?)' , array($search_term))
                                    ->paginate($count);
        }else{
            $treasuries = Treasury::whereRaw('MATCH (mother_ministry, organization_name,beneficiary_name,description) AGAINST (?)' , array($search_term))
                                    ->paginate($count);            
        }


    
        return response()
                ->json(compact("treasuries"));
    }

    /**
     * Get Payments to a Beneficiary on a particular date
     * 
     * Get Payments to a Beneficiary on a particular date
     * 
     * @bodyParam  beneficiary_name string required Beneficiary Name.
     * @bodyParam  date string required The payment date.
     *
     * @return \Illuminate\Http\Response
     */
    public function getByBeneficiaryOnDate(Request $request)
    {
        $request->validate([
            'date' => 'required|date_format:Y-m-d',  
            'beneficiary_name' => 'required|string', 
        ]);

        $date = \Carbon\Carbon::parse($request->date)->toDateTimeString();
        $treasuries = Treasury::where("beneficiary_name", $request->beneficiary_name)
                                ->where("date", $date)
                                ->get();

        return response()
                ->json(compact("treasuries"));
    }

    
}
