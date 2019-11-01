<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'c_password' => 'required|same:password',
            ]
        );
        // dd('sssssssss');
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken(request['client'])->accessToken;
        return response()->json(['success' => $success], $this->successStatus);
    }


    public function login()
    {
        // if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
        //     $user = Auth::user();
        //     dd($user);
        //     // $success['token'] =  $user->createToken(request('client'))->accessToken;
        //     return response()->json(['success' => $success], $this->successStatus);
        // } else {

        //     return response()->json(['error' => 'vvvvvvvvvUnauthorised'], 401);
        // }
    }

    public function logout (Request $request) {

        $token = $request->user()->token();
        dd($token);
        $token->revoke();
    
        $response = 'You have been succesfully logged out!';
        return response($response, 200);
    
    }
}
