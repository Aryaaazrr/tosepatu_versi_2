<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $username = request()->input('username');
        $email = request()->input('email');
        $password = request()->input('password');
        $no_telp = request()->input('no_telp');
        $wilayah_id = request()->input('wilayah_id');
        DB::table('users_mobile')->insert([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'no_telp' => $no_telp,
            'wilayah_id' => $wilayah_id,
        ]);

        echo "Data Berhasil di Simpan";

    }
}

