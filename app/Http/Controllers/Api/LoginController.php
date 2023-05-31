<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('users_mobile')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($user ) {
            $response = array(
                'success' => true,
                'message' => 'Logged in successfully',
                'email' => $user->email,
                'username' => $user->username,
                'id' => $user->id,
                'no_telp' => $user->no_telp,
                'wilayah_id' => $user->wilayah_id,
            );
            return response()->json($response);
        } else {
            $response = array(
                'success' => false,
                'message' => 'User not found or incorrect password',
            );
            return response()->json($response);
        }
    }
}