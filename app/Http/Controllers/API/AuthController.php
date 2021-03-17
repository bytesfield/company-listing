<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use JsonResponse;

    public function login(AuthRequest $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {

            return $this->notFound('These credentials do not match our records.');
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return $this->success('Login Successful', $response);
    }
}
