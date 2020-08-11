<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
     * Get a list of all users in the database
     * 
     *   
     *
     * @group  User Management
     * 
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return response()
            ->json(compact("users"));
    }

    /**
     * Delete and Admin User
     * 
     * @urlParam  id required The ID of the user /{id}.   
     *
     * @group  User Management
     * 
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()
            ->json(["message"=>"User deleted"]);
    }

    /**
     * Update a User Record
     * 
     * Update a user with a specified ID
     * 
     * @urlParam  id required The ID of the user /{id}.
     * 
     * @bodyParam  name string required The name of the user.
     * @bodyParam  email string required The user email. 
     *
     * @group  User Management
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TreasuryTemporary  $treasury
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string', 
            'email' => 'required|string|exists:users,email',  
        ]);

        $user = User::find($id); 
  
        $user->update($request->all()); 
        return response()
                ->json(compact("user"));
    }
}
