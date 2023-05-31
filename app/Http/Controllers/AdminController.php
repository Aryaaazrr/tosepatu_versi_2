<?php

namespace App\Http\Controllers;

use App\Charts\berandaChart;
use App\Models\Berita;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(berandaChart $berandaChart)
    {
        $jakartaTimezone = new DateTimeZone('Asia/Jakarta');
        $dateNow = Carbon::now($jakartaTimezone);

        $karyawan = User::whereNotIn('role_id', [1])->get();
        $produk = Produk::count();
        $berita = Berita::where('status_berita', 1)->count();
        $proses = Pesanan::where('status_pesanan', 'Proses')->count();
        $total = Pesanan::count();

        $today_users = Pesanan::whereDate('created_at', $dateNow->toDateString())->count();
        $yesterday_users = Pesanan::whereDate('created_at', $dateNow->subDays(1))->count();
        $users_2_days_ago = Pesanan::whereDate('created_at', $dateNow->subDays(2))->count();

        // $chart = new PesananChart;
        // $chart->labels(['2 hari yang lalu', 'Kemarin', 'Hari Ini']);
        // $chart->dataset('Total Pesanan', 'line', [$users_2_days_ago, $yesterday_users, $today_users])->color('#2dd4bf')->backgroundColor('rgba(95, 211, 208, 0.1)');

        return view('admin.beranda', ['chart' => $berandaChart->build(), 'karyawan' => $karyawan, 'produk' => $produk, 'berita' => $berita, 'proses' => $proses, 'total' => $total, 'date' => $dateNow]);
        // $request->session()->flush();
        // return redirect('login');
    }
}
