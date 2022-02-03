<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request){
            $fields = $request->validate([
                'name' => 'required | string',
                'Role' => 'required | string',
                'email' => 'required |string |unique:users,email',
                'password' => 'required |string |confirmed'
            ]);

            $user = User::create([
                'name' => $fields['name'],
                'Role' => $fields['Role'],
                'email'=> $fields['email'],
                'password' => bcrypt($fields['password'])
            ]);

            $token = $user -> createToken('myapptoken') -> plainTextToken;

            $response = [
                'user' => $user,
                'Token' => $token
            ];

            return response ($response, 201);
    }

    public function signIn(Request $request){
        $fields = $request->validate([
            'email' => 'required |string ',
            'password' => 'required |string '
        ]);

        //check email
        $user = User::where('email', $fields['email']) -> first();

        //check password
        if(!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message' => 'invalid credentials'
            ], 401);
        }
        $token = $user -> createToken('myapptoken') -> plainTextToken;

        $response = [
            'user_Role' => $user->Role,
            'Token' => $token
        ];

        return response ($response, 201);
}

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    public function forgotPassword(Request $request){
        $request -> validate([
            'email' => 'required | email',
        ]);

        return  [
            'message' => 'Reset password link sent to youre email'];
    }

    public function resetPassword(Request $request){
        $request -> validate([
            'email'  => 'required | email',
            'passowrd' => 'required | string | max:12 | confirmed',
            'token' => 'required|string'
        ]);

        $email_status = Password::reset($request, function ($user,$password){
            $user->password = $password;
            $user->save();
        });

        if($email_status == Password::INVALID_TOKEN){
            return response("please Provide a valid token");
        }
        return response("Password Changed Succesifuly");
    }

    public function show(){
        return User::all();
    }

    public function count(){
        $users = User::all();
        return count($users);
    }
}
