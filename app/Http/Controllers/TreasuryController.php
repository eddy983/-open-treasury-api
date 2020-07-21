<?php

namespace App\Http\Controllers;

use App\Treasury;
use Illuminate\Http\Request;

class TreasuryController extends Controller
{
    /**
     * A List of treasury payments
     * 
     * Shows a paginated list of payments
     * 
     * @queryParam  count int The number of records to return. Example 10
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Log::info("GET /treasury");
        $count = isset($_GET['count']) ? $_GET['count'] : 10;
    
        $treasuries = Treasury::paginate($count);
    
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
}
