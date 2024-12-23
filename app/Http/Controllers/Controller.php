<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Client\Request;
use Illuminate\Routing\Controller as BaseController;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Contracts\Providers\JWT;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function token(Request $req)
    {
        // // Find the user by phone number
        // $user = Passenger::where('phone', $req->phone)->first();

        // // Check if user exists and password matches
        // if (!$user || !Hash::check($req->password, $user->password)) {

        //     return response()->json(['error' => 'Invalid credentials'], 401);
        // } else {

        //     $token = JWTAuth::fromUser($user);

        //     // Return the token
        //     return response()->json([
        //         'token' => $token,
        //         'user'=>$user,
        //         'expires_in' => JWTAuth::factory()->getTTL() * 60
            
            
            
        //     ]);
        // }

        $credentials = request(['phone', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);


    }
    public function refresh()
    {
        return $this->respondWithToken(JWTAuth::auth()->refresh());
    }

    

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in'=>auth()->factory()->getTTL()*60
            // 'expires_in' => auth()->factory()->getTTL() * 60

        ]);
    }
}
