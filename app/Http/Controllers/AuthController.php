<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //creating a new user
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

    //logs in the user and creates a token for all authenticated
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
            'user' => $user,
            'Token' => $token
        ];

        return response ($response, 201);
}

//signs out the user and deletes the authenticationn token from the database
    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    // this sends a password reset link the user's email
    public function forgotPassword(Request $request){
        $request -> validate([
            'email' => 'required | email',
        ]);

        return  [
            'message' => 'Reset password link sent to youre email'];
    }

    // this function updates the user password in the system
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
    // this function returns all active users in the system
    public function show(){
        return User::all();
    }
// this returns user count
    public function count(){
        $users = User::all();
        return count($users);

    }

    // this update the user records
    public function update(Request $request, $id){
        $usr = User::find($id);
        $usr ->update($request->all());
        return $usr;
    }
}
