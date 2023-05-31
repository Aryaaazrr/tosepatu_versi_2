<?php

namespace App\Http\Controllers;

use App\Models\PengaturanProfil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PengaturanProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('superadmin.pengaturan-profil', compact('user'));
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
     * @param  \App\Models\PengaturanProfil  $pengaturanProfil
     * @return \Illuminate\Http\Response
     */
    public function show(PengaturanProfil $pengaturanProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengaturanProfil  $pengaturanProfil
     * @return \Illuminate\Http\Response
     */
    public function edit(PengaturanProfil $pengaturanProfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengaturanProfil  $pengaturanProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengaturanProfil $pengaturanProfil)
    {
        // dd($request->all());
        // validasi data
        $validator = Validator::make($request->all(), [
            'foto' => 'image|mimes:jpeg,png,jpg|max:5120',
            'alamat' => 'max:255',
            'no_telp' => 'regex:/^\d{10,12}$/',
        ]);

        // dd($validator);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        if ($request->file('foto')) {

            $file_path = 'uploads/profile';

            $file = $request->file('foto');

            $ext = $file->getClientOriginalExtension();

            $filename = rand(100000, 1001238912) . "." . $ext;

            $file->move($file_path, $filename);

            $user = User::where('id', $request->id)->first();
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'foto' => $filename,
            ]);
            return redirect('superadmin/pengaturan-profil')->with('success', 'Profile Berhasil Diperbarui!');
        } else {
            $user = User::where('id', $request->id)->first();
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);
            return redirect('superadmin/pengaturan-profil')->with('success', 'Profile Berhasil Diperbarui!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengaturanProfil  $pengaturanProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengaturanProfil $pengaturanProfil)
    {
        //
    }
}
