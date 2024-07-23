<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function pesanan(Request $request)
    {
        $users_mobile_id =  $request->input('users_mobile_id');
        $status_pesanan = ["Proses", "Menunggu Konfirmasi"];

        // $request->input('users_mobile_id');
        
        $pesanan = Pesanan::select('pesanan.id', 'pesanan.grand_total', 'pesanan.status_pesanan')
            ->where('pesanan.users_mobile_id', $users_mobile_id)
            ->whereIn('pesanan.status_pesanan', $status_pesanan)
            ->get();
        
        return response()->json($pesanan);
    }
}
