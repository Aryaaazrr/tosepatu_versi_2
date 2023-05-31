<?php

namespace App\Http\Controllers;

// Use Alert;

use App\Models\AksesLayanan;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Produk;
use App\Models\Wilayah;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Produk::all();
        return view('superadmin.produk', ['produk' => $layanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jakartaTimezone = new DateTimeZone('Asia/Jakarta');
        $dateNow = Carbon::now($jakartaTimezone)->format('Ymd');
        $lastProduk = Produk::latest('id_layanan')->first();

        $nextNumber = 1;
        if ($lastProduk) {
            $lastProdukNumber = substr($lastProduk->id_layanan, -4);
            if (substr($lastProduk->id_layanan, 2, 8) == $dateNow) {
                $nextNumber = intval($lastProdukNumber) + 1;
            }
        }

        $produk = new Produk();
        $produk = 'TL' . $dateNow . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        $wilayah = Wilayah::all();

        return view('superadmin.content.tambah-produk', ['id_produk' => $produk, 'wilayah' => $wilayah]);
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
            'foto_layanan' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'nama_layanan' => 'required|unique:layanan',
            'harga_layanan' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'required',
            'wilayah' => 'required|array|min:1',
            'wilayah.*' => 'integer',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $file_path = 'uploads/produk';

        $file = $request->file('foto_layanan');

        $ext = $file->getClientOriginalExtension();

        $filename = rand(100000, 1001238912) . "." . $ext;

        $file->move($file_path, $filename);

        $create = Produk::create([
            'id_layanan' => $request->id_layanan,
            'nama_layanan' => $request->nama_layanan,
            'harga_layanan' => $request->harga_layanan,
            'description' => $request->description,
            'foto_layanan' => $filename,
            'users_id' => Auth::user()->id
        ]);

        $idlayanan = $create->id;

        $wilayahIds = $request->wilayah; 

        foreach ($wilayahIds as $wilayahId) {
            $akses = AksesLayanan::create([
                'wilayah_id' => $wilayahId,
                'layanan_id' => $idlayanan
            ]);
        }

        if ($create && isset($akses)) {
            return redirect('superadmin/produk')->with('success', 'Produk Berhasil Ditambahkan!');
        } else {
            return back()->with('errors', 'Terjadi kesalahan')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk, $id)
    {
        $produk = Produk::find($id);
        return view('superadmin.content.edit-produk', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk, $id)
    {
        // validasi data
        $validator = Validator::make($request->all(), [
            'foto_layanan' => 'image|mimes:jpeg,png,jpg|max:5120',
            'harga_layanan' => 'numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'required',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        if ($request->file('foto_layanan')) {

            $file_path = 'uploads/produk';

            $file = $request->file('foto_layanan');

            $ext = $file->getClientOriginalExtension();

            $filename = rand(100000, 1001238912) . "." . $ext;

            $file->move($file_path, $filename);

            $user = Produk::where('id', $id)->first();
            $user->update([
                'id_layanan' => $request->id_layanan,
                'nama_layanan' => $request->nama_layanan,
                'harga_layanan' => $request->harga_layanan,
                'description' => $request->description,
                'foto_layanan' => $filename,
                'users_id' => Auth::user()->id
            ]);
        } else {
            $user = Produk::where('id', $id)->first();
            $user->update([
                'id_layanan' => $request->id_layanan,
                'nama_layanan' => $request->nama_layanan,
                'harga_layanan' => $request->harga_layanan,
                'description' => $request->description,
                'users_id' => Auth::user()->id
            ]);
        }


        return redirect('superadmin/produk')->with('success', 'Produk Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::where('id', $id)->first();
        $produk->delete();

        return redirect('superadmin/produk')->with('success', 'Data Produk Berhasil Dihapus!');
    }
}
