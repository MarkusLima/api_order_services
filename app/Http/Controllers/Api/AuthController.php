<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function handleResponse($result, $msg)
    {
    	$res = [
            'success' => true,
            'data'    => $result,
            'message' => $msg,
        ];
        return response()->json($res, 200);
    }

    public function handleError($error, $errorMsg = [], $code = 404)
    {
    	$res = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMsg)){
            $res['data'] = $errorMsg;
        }
        return response()->json($res, $code);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return $this->handleError($validator->errors());
        }
    
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('LaravelSanctumAuth')->plainTextToken;
        $success['name'] =  $user->name;
    
        return $this->handleResponse($success, 'User successfully registered!');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();

        if(empty($user)){
            return response()->json(['message'=> 'email inválido!']);
        }
    
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['message'=> 'password incorrect!']);
        }

        $success['user'] = $user;
        $success['token'] = $user->createToken('LaravelSanctumAuth')->plainTextToken;

        return $this->handleResponse($success, 'Token create successfully registered!');
    }

    public function logout(Request $request)
    {
        $user = User::where('email', $request->user()->email)->first();
        if(empty($user)){
            return $this->handleError('User not found token!');
        }
        $user->tokens()->delete();
        $success['user_id'] = $user->id;
        return $this->handleResponse($success, 'Logout sucessfully! Token delete!');
    }
    public function getLogin()
    {
        return $this->handleError('User not found token!');
    }

    public function getInfoUser(Request $request)
    {
        return $request->user();
    }
}
