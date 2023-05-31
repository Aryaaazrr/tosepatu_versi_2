<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_berita = KategoriBerita::all();
        return view('superadmin.kategori-berita', compact('kategori_berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.content.tambah-kategori-berita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        $validator = Validator::make($request->all(), [
            'nama_kategori_berita' => 'required|unique:kategori_berita',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $create = KategoriBerita::create([
            'nama_kategori_berita' => $request->nama_kategori_berita,
        ]);

        return redirect('superadmin/kategori-berita')->with('success', 'Kategori Berita Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriBerita $kategoriBerita, $id)
    {
        $daftarBerita = KategoriBerita::find($id);
        $wilayah = Wilayah::all();
        return view('superadmin.content.edit-kategori-berita', ['daftarBerita' => $daftarBerita, 'wilayah' => $wilayah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriBerita $kategoriBerita, $id)
    {
        $user = KategoriBerita::where('id', $id)->first();
        $user->update([
            'nama_kategori_berita' => $request->nama_kategori_berita
        ]);
        return redirect('superadmin/kategori-berita')->with('success', 'Kategori Berita Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriBerita  $kategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriBerita $kategoriBerita)
    {
        //
    }
}
