<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try{
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            }

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_name' => 'user'])) {
                $user = Auth::user();
                $token = $user->createToken('APIToken')->plainTextToken;
                $user->token = $token;
                return response()->json([
                    'message' => 'Login successful',
                    'status' =>true,
                    'user' => $user,
                ]);
            }
            return response()->json(['status' => false,'user' => null, 'message' => 'Invalid credentials or role.'], 401);
        }catch(Throwable $th){
            return response()->json([
                'status' => false,
                'message' => 'An error occurred: ' . $th->getMessage(),
                'user' => null
            ], 500);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $token = $user->createToken('APIToken')->plainTextToken;
            $user->token = $token;
            return response()->json([
                'message' => 'Registration successful',
                'status' => true,
                'user' => $user,
            ], 201);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred: ' . $th->getMessage(),
                'user' => null
            ], 500);
        }
    }
}

