<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Store a new user
     * 
     * @param \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
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

    /**
     * User log in
     * 
     * @param \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function signIn(Request $request){
        $fields = $request->validate([
            'email' => 'required |string ',
            'password' => 'required |string '
        ]);

        /*
        *check email
        */
        $user = User::where('email', $fields['email']) -> first();

        /**
         * check password
         */
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

    /**
     * Enables the user to sign out
     * 
     * @param \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    /**
     * Sends a reset password Link to the users email
     * 
     * @param \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function forgotPassword(Request $request){
        $request -> validate([
            'email' => 'required | email',
        ]);

        return  [
            'message' => 'Reset password link sent to youre email'];
    }

    /**
     * Reset password for a user
     * 
     * @param \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
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
     /**
     * Retreives all the objects
     * 
     *
     * 
     * @return User
     */
    public function show(){
        return User::all();
    }
    /**
     * Retreives the count of objects
     * 
     *
     * 
     * @return int count
     */
    public function count(){
        $users = User::all();
        return count($users);

    }

    /**
     * Updates a specific resoiurce with the specified $id param
     * 
     * @param \Illuminate\Http\Request  $request
     * @param int $id
     * 
     * @return User
     */
    public function update(Request $request, $id){
        $usr = User::find($id);
        $usr ->update($request->all());
        return $usr;
    }
}
