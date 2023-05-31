<?php

namespace App\Http\Controllers\Api;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    public function layanan()
    {
        $layanan = DB::table('layanan')
            ->select('layanan.*')
            ->get();

        return response()->json($layanan);
    }
}
