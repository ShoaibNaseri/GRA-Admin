<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'pass');

        // Check if the user is an admin
        $admin = Admin::where('name', $credentials['name'])->first();
        if (!$admin || !Hash::check($credentials['pass'], $admin->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        // If the credentials are correct, generate a token
        $token = $admin->createToken('AdminApp')->accessToken;

        return response()->json(['token' => $token]);
    }
}
