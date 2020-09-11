<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Mail\UserRegisteredByAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * Register an Admin User
     * 
     * @bodyParam  name string required The Name of the user.
     * @bodyParam  email string required The Email of the user.
     * @bodyParam  password string required The Password of the User.
     * @bodyParam  password_repeat string required Repeat User password. 
     * 
     * @group  User Management
     */
    public function register(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string', 
            'email' => 'required|string|unique:users,email', 
            'password' => 'nullable|string',
            'password_repeat' => 'nullable|string|same:password'
        ]);
        if ($validator->fails()) {
            return response()
                    ->json([
                        'errors' => $validator->errors()
                    ], 400);
        }

        $randomPassword = Str::random(8);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($randomPassword)
        ]);

        $user->save();

        Mail::to($user->email)
             ->send(new UserRegisteredByAdmin($user, $randomPassword));

        return response()->json([
            'message' => "User successfully created. Password credential sent.",
            "user" => $user
        ]);
    }
}
