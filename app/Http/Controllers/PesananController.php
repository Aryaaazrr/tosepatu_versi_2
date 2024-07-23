<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use App\Models\UsersMobile;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Pesanan::all();
        return view('superadmin.pesanan', ['produk' => $layanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan, $id)
    {
        $pesanan = Pesanan::find($id);
        $id_user = UsersMobile::where('id', $pesanan->users_mobile_id)->first();
        $id_karyawan = User::where('id', $pesanan->users_id)->first();

        $nama_karyawan = $id_karyawan->username;
        $nama_pelanggan = $id_user->username;

        $detail = DetailPesanan::where('pesanan_id', $pesanan->id)->get();
        $user = User::whereNotIn('role_id', [1])->get();
        
        if ($pesanan->status_pesanan == 'Proses') {
            $status = ['Selesai', 'Dibatalkan'];
            return view('superadmin.content.pesanan-view', ['pesanan' => $pesanan, 'users_mobile' => $nama_pelanggan, 'detail' => $detail, 'status' => $status, 'users' => $user, 'nama_karyawan' => $nama_karyawan]);
        } else {
            $status = ['Selesai'];
            return view('superadmin.content.pesanan-view', ['pesanan' => $pesanan, 'users_mobile' => $nama_pelanggan, 'detail' => $detail, 'status' => $status, 'users' => $user, 'nama_karyawan' => $nama_karyawan]);
        }
        
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan, $id)
    {
        $pesanan = Pesanan::find($id);
        $id_user = UsersMobile::where('id', $pesanan->users_mobile_id)->first();
        $nama_pelanggan = $id_user->username;
    
        $detail = DetailPesanan::where('pesanan_id', $pesanan->id)->get();
        $status = ['Proses', 'Selesai', 'Dibatalkan'];
        $user = User::whereNotIn('role_id', [1])->get();
    
        return view('superadmin.content.pesanan-edit', ['pesanan' => $pesanan, 'users_mobile' => $nama_pelanggan, 'detail' => $detail, 'status' => $status, 'users' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan, $id)
    {
        // dd($request->all());
        $karyawan = User::where('username', $request->karyawan)->first();
        // dd($karyawan->id);
        if ($karyawan == null) {
            $pesanan = Pesanan::where('id', $id)->first();
            $pesanan->update([
                'users_id' => $request->karyawan,
                'status_pesanan' => $request->status_pesanan
            ]);
        } else {
            $pesanan = Pesanan::where('id', $id)->first();
            $pesanan->update([
                'users_id' => $karyawan->id,
                'status_pesanan' => $request->status_pesanan
            ]);
        }
        return redirect('superadmin/pesanan')->with('success', 'Pesanan Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
