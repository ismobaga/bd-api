<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $credentials = request(['identifier', 'password']);
        $withEmail = [
            'email' => $credentials['identifier'],
            'password' => $credentials['password'],
        ];
        $withUsername = [
            'username' => $credentials['identifier'],
            'password' => $credentials['password'],
        ];

        if (!($token = auth()->attempt($withUsername)) && !($token = auth()->attempt($withEmail))) {

            return response()->json(['error' => 'Unauthorized'], 401);
        }


        return $this->respondWithToken($token);
    }
}
