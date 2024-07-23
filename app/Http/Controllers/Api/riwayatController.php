<?php

namespace App\Http\Controllers\Api;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function riwayat(Request $request)
{
    $users_mobile_id = $request->input('users_mobile_id');
    $status_pesanan = "selesai";

    $pesanan = Pesanan::select('pesanan.id', 'metode_pengiriman.nama_pengiriman', 'pesanan.catatan', 'pesanan.grand_total', 'pesanan.alamat')
        ->join('metode_pengiriman', 'metode_pengiriman.id', '=', 'pesanan.pengiriman_id')
        ->where('pesanan.users_mobile_id', $users_mobile_id)
        ->where('pesanan.status_pesanan', $status_pesanan)
        ->orderBy('pesanan.id', 'desc')
        ->get();

    return response()->json($pesanan);
}

}