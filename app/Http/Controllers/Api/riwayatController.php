<?php

namespace App\Http\Controllers\Api;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function riwayat()
    {
        $layanan = DB::table('pesanan')
            ->select('pesanan.*')
            ->get();

        return response()->json($layanan);
    }
}