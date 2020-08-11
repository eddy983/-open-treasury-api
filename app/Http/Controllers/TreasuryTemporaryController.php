<?php

namespace App\Http\Controllers;

use App\Treasury;
use App\TreasuryTemporary;
use Illuminate\Http\Request;

class TreasuryTemporaryController extends Controller
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
     * A List of temporary treasury payments records
     * 
     * Shows a paginated list of payments records gotten by the data crawler
     * 
     * @queryParam  count int The number of records to return. Example 10
     * @queryParam  page int The page. Example 2
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Log::info("GET /treasury");
        $count = isset($_GET['count']) ? $_GET['count'] : 10;
    
        $treasuries = TreasuryTemporary::where("status", "PENDING")->orderBy("date", "DESC")->paginate($count);
    
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
     * Get a single temporary treasury record.
     * 
     * @urlParam  id required The ID of the treasury record /{id}.
     *
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $treasury = TreasuryTemporary::find($id);

        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Temporary Treasury record with ID ({$id}) doesnt exist"
                    ], 404);
        }
         
        return response()
                ->json(compact("treasury"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */
    public function edit(Treasury $treasury)
    {
        //
    }

    /**
     * Update a Temporary Treasury Record
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
     * @param  \App\TreasuryTemporary  $treasury
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

        $treasury = TreasuryTemporary::find($id);
        
        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Temporary Treasury record with ID ({$id}) doesnt exist"
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
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    { 
        $treasury = TreasuryTemporary::find($id);

        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Temporary Treasury record with ID ({$id}) doesnt exist"
                    ], 404);
        }
        
        $treasury->delete();
  
        return response()
                ->json([
                    "message" => "Temporary Treasury record with id {$treasury->id} deleted"
                ]);
    }

    /**
     * Accept a Temporary Treasury Record
     * 
     * Accept a crawled data into the main database
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
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */

    public function accept(Request $request, $id)
    {
        $treasury = TreasuryTemporary::find($id);

        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Temporary Treasury record with ID ({$id}) doesnt exist"
                    ], 404);
        }

        if($treasury->status !== "PENDING")
        {
            return response()
                    ->json([
                        "message" => "Temporary Treasury record with ID ({$id}) has already been acted on. Status: $treasury->status"
                    ], 400);            
        }

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

        $new_treasury = new Treasury($request->all());
        $new_treasury->save();

        $treasury->update([
            'status' => "ACCEPTED",
            'merged_treasury_id' => $new_treasury->id
        ]);

        return response()
                ->json([
                    "message" => "Temporary Treasury record with ID ({$id}) has now been merged"
                ], 200); 
        
        
    }


    /**
     * Accept a Temporary Treasury Record
     * 
     * Accept a crawled data into the main database
     * 
     * @urlParam  id required The ID of the treasury record /{id}.  
     *
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */

    public function declined(Request $request, $id)
    {
        $treasury = TreasuryTemporary::find($id);

        if(!$treasury){
            return response()
                    ->json([
                        "message" => "Temporary Treasury record with ID ({$id}) doesnt exist"
                    ], 404);
        }

        if($treasury->status !== "PENDING")
        {
            return response()
                    ->json([
                        "message" => "Temporary Treasury record with ID ({$id}) has already been acted on. Status: $treasury->status"
                    ], 400);            
        }

        $treasury->update([
            'status' => "DECLINED"
        ]);

        return response()
                ->json([
                    "message" => "Temporary Treasury record with ID ({$id}) is now declined"
                ], 200);         
        
    }
}
