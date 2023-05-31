<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UpdatePasswordController extends Controller {


public function UpdatePassword()
{
    $email = request()->input('email');
    $password = request()->input('password');

    DB::table('users_mobile')->where('email', $email)->update([
        'password' => $password,
    ]);

    return "Data Updated";
}
}
?>