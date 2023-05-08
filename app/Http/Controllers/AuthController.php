<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use  Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //Register user
    public function register(Request $request){
        //validate fields
     $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
    ]);
       
        //create user
      $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),

    ]);
    $token = $user->createToken('foundprojetctoken')->plainTextToken;
    $response=[
        'user' => $user,
        'token' => $token
     ];
    
    return response($response,201);
    }


//logout user
    public function logout()
    {
        auth()-> user()->tokens()->delete();
        return response([
            'message'=> 'logout success.'

        ], 200);
    }


    //login user
    public function login(Request $request){
       //validate fields
     $data = $request->validate([
       
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed'
    ]);
       
    $user= User::where('email',$data['email'])->first(); 
        if(!$user || Hash::check($data['password'], $user->password)){
            return response([
                'message'=> 'Invalid credentials.'

            ], 401);
        }else{
            $token = $user->createToken('foundprojetctokenLogin')->plainTextToken;
            $response=[
                'user' => $user,
                'token' => $token
             ];
             return response($response,200);
        }
        
    }

 
   
}
