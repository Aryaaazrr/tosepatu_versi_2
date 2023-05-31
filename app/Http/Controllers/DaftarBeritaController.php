<?php

namespace App\Http\Controllers;

use App\Models\AksesBerita;
use App\Models\Berita;
use App\Models\DaftarBerita;
use App\Models\KategoriBerita;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DaftarBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('superadmin.daftar-berita', compact('berita'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_berita = KategoriBerita::all();
        $wilayah = Wilayah::all();
        return view('superadmin.content.tambah-daftar-berita', ['kategori_berita' => $kategori_berita, 'wilayah' => $wilayah]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // validasi data
        $validator = Validator::make($request->all(), [
            'nama_berita' => 'required',
            'foto_berita' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'description_berita' => 'required',
            'potongan' => 'required|integer',
            'wilayah' => 'required|array|min:1',
            'wilayah.*' => 'integer',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $file_path = 'uploads/berita';

        $file = $request->file('foto_berita');

        $ext = $file->getClientOriginalExtension();

        $filename = rand(100000, 1001238912) . "." . $ext;

        $file->move($file_path, $filename);

        $create = Berita::create([
            'nama_berita' => $request->nama_berita,
            'description_berita' => $request->description_berita,
            'potongan' => $request->potongan,
            'foto_berita' => $filename,
            'kategori_berita_id' => $request->kategori,
        ]);

        $idberita = $create->id;

        $wilayahIds = $request->wilayah; 

        foreach ($wilayahIds as $wilayahId) {
            $akses = AksesBerita::create([
                'wilayah_id' => $wilayahId,
                'berita_id' => $idberita
            ]);
        }

        if ($create && isset($akses)) {
            return redirect('superadmin/daftar-berita')->with('success', 'Berita Berhasil Ditambahkan!');
        } else {
            return back()->with('errors', 'Terjadi kesalahan')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarBerita  $daftarBerita
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarBerita $daftarBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarBerita  $daftarBerita
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarBerita $daftarBerita, $id)
    {
        $daftarBerita = Berita::find($id);
        $wilayah = Wilayah::all();
        return view('superadmin.content.edit-daftar-berita', ['daftarBerita' => $daftarBerita, 'wilayah' => $wilayah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarBerita  $daftarBerita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarBerita $daftarBerita, $id)
    {
        $user = Berita::where('id', $id)->first();
        $user->update([
            'status_berita' => 0
        ]);
        return redirect('superadmin/daftar-berita')->with('success', 'Berita Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarBerita  $daftarBerita
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarBerita $daftarBerita)
    {
        //
    }
}
