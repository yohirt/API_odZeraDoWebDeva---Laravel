<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class UsersController extends Controller
{
    public function login(Request $request)
    {
          $uesrData = $request->only('email', 'password');
          if (!$token = JWTAuth::attempt($uesrData)){
              return response()->json([
                'error' => 'invalid login or password'
              ], 401);
          }

          return response()->json(
              [
                  'token ' => $token
              ], 200);
          echo $token;
    }
    public function test()
    {
        echo "test";
    }
}
