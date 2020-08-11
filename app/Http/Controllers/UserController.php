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
}
