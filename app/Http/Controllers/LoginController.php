<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use App\Models\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Akun;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    // use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Auth::user());
        return view('auth.login');
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
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required']
        // ]);

        // // // $email = 'email';
        // // // $password = 'password';
        // if (Auth::attempt($credentials)) {
        //     // $request->session()->regenerate();
        //     if (Auth::user()->id_role == 1) {
        //         return redirect('superadmin/beranda');
        //     }

        //     if (Auth::user()->id_role == 2) {
        //         return redirect('admin/beranda');
        //     }

        //     if (Auth::user()->id_role == 3) {
        //         return redirect('karyawan/beranda');
        //     }

        //     // return redirect()->intended('dashboard');
        // }

        // // return back()->withErrors([
        // //     'email' => 'The provided credentials do not match our records.',
        // // ])->onlyInput('email');


        // // dd($credentials);
        // // // cek login valid
        // // if (Auth::attempt($credentials)) {
        //     // cek verify-email
        //     // if (Auth::user()->verified == 0) {
        //     //     Auth::logout();
        //     //     $request->session()->invalidate();
        //     //     $request->session()->regenerateToken();

        //     //     Session::flash('status', 'failed!');
        //     //     Session::flash('message', 'Verifikasi Email Terlebih Dahulu!');
        //     //     return redirect('/login');
        //     // }

        //     // // dd(Auth::user());
        //     // $request->session()->regenerate();
        //     // return redirect()->intended('/dashboard');

        //     // if (Auth::user()->id_role == 1) {
        //     //     return redirect('superadmin/beranda');
        //     // }

        //     // if (Auth::user()->id_role == 2) {
        //     //     return redirect('admin/beranda');
        //     // }

        //     // if (Auth::user()->id_role == 3) {
        //     //     return redirect('karyawan/beranda');
        //     // }
        // // }
        // Session::flash('status', 'failed!');
        // Session::flash('message', 'Akun Tidak Ditemukan. Silahkan Daftar akun terlebih dahulu!');
        // return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->email_verified_at == '') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed!');
                Session::flash('message', 'Verifikasi Email Terlebih Dahulu!');
                return redirect('login');
            }

            if (Auth::user()->role_id == 1) {
                return redirect('superadmin/beranda');
            }

            if (Auth::user()->role_id == 2) {
                return redirect('admin/beranda');
            }

            if (Auth::user()->role_id == 3) {
                return redirect('karyawan/beranda');
            }
        }
        
        Session::flash('status', 'failed!');
        Session::flash('message', 'Akun Tidak Ditemukan. Silahkan Daftar akun terlebih dahulu!');
        return redirect('login');
    }
}
