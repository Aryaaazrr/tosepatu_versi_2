<?php

namespace App\Http\Controllers;

use App\Models\MetodePengiriman;
use App\Models\PengaturanToko;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengaturanTokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metode = MetodePengiriman::all();
        $wilayah = Wilayah::all();
        return view('superadmin.pengaturan-toko', ['metode' => $metode, 'wilayah' => $wilayah]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMetode()
    {
        return view('superadmin.content.tambah-metode');
    }
    
    public function createWilayah()
    {
        return view('superadmin.content.tambah-wilayah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMetode(Request $request)
    {
        // validasi data
        $validator = Validator::make($request->all(), [
            'nama_pengiriman' => 'required|unique:metode_pengiriman',
            'description_pengiriman' => 'required',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $create = MetodePengiriman::create([
            'nama_pengiriman' => $request->nama_pengiriman,
            'description_pengiriman' => $request->description_pengiriman,
        ]);

        return redirect('superadmin/pengaturan-toko')->with('success', 'Metode Berhasil Ditambahkan!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeWilayah(Request $request)
    {
        // validasi data
        $validator = Validator::make($request->all(), [
            'nama_wilayah' => 'required|unique:metode_pengiriman',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $create = Wilayah::create([
            'nama_wilayah' => $request->nama_pengiriman,
        ]);

        return redirect('superadmin/pengaturan-toko')->with('success', 'Wilayah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengaturanToko  $pengaturanToko
     * @return \Illuminate\Http\Response
     */
    public function show(PengaturanToko $pengaturanToko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengaturanToko  $pengaturanToko
     * @return \Illuminate\Http\Response
     */
    public function editMetode(PengaturanToko $pengaturanToko, $id)
    {
        $metode = MetodePengiriman::find($id);
        return view('superadmin.content.edit-metode', compact('metode'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengaturanToko  $pengaturanToko
     * @return \Illuminate\Http\Response
     */
    public function editWilayah(PengaturanToko $pengaturanToko, $id)
    {
        $wilayah = Wilayah::find($id);
        return view('superadmin.content.edit-wilayah', compact('wilayah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengaturanToko  $pengaturanToko
     * @return \Illuminate\Http\Response
     */
    public function updateMetode(Request $request, PengaturanToko $pengaturanToko, $id)
    {
        $user = MetodePengiriman::where('id', $id)->first();
        $user->update([
            'nama_pengiriman' => $request->nama_pengiriman,
            'description_pengiriman' => $request->description_pengiriman
        ]);
        return redirect('superadmin/pengaturan-toko')->with('success', 'Metode Berhasil Diperbarui!');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengaturanToko  $pengaturanToko
     * @return \Illuminate\Http\Response
     */
    public function updateWilayah(Request $request, PengaturanToko $pengaturanToko, $id)
    {
        // dd($request->all());
        $user = Wilayah::where('id', $id)->first();
        $user->update([
            'nama_wilayah' => $request->nama_wilayah,
            'status_toko' => $request->status_toko
        ]);
        
        return redirect('superadmin/pengaturan-toko')->with('success', 'Wilayah Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengaturanToko  $pengaturanToko
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengaturanToko $pengaturanToko)
    {
        //
    }
}
