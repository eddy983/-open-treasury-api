<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
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
