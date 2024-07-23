<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MetodePengirimanController extends Controller
{
    public function MetodePengiriman()
    {
        $MetodePengiriman = DB::table('metode_pengiriman')
            ->select('metode_pengiriman.*')
            ->get();

        return response()->json($MetodePengiriman);
    }
}
