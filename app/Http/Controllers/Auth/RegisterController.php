<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Register an Admin User
     * 
     * @bodyParam  name string required The Name of the user.
     * @bodyParam  email string required The Email of the user.
     * @bodyParam  password string required The Password of the User.
     * @bodyParam  password_repeat string required Repeat User password. 
     */
    public function register(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string', 
            'email' => 'required|string|unique:users,email', 
            'password' => 'required|string',
            'password_repeat' => 'required|string|same:password'
        ]);
        if ($validator->fails()) {
            return response()
                    ->json([
                        'errors' => $validator->errors()
                    ]);
        }

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();

        return response()->json([
            'message' => "User successfully created",
            "user" => $user
        ]);
    }
}
