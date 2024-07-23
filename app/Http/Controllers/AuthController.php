<?php

namespace App\Http\Controllers;

use App\Models\TokenAcsess;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        // dd(Auth::user());
        return view('auth.login');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogle()
    {
        $githubUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'id' => $githubUser->id,
        ], [
            'username' => $githubUser->name,
            'email' => $githubUser->email,
            'remember_token' => $githubUser->token,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
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

                return redirect('verify');
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

    public function verify(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $email = $request->email;

        $cek = User::select('email')->where('email', $email)->groupBy('email')->first();
        if ($cek) {
            $token = Str::random(10); // Fungsi untuk menghasilkan token acak (misalnya menggunakan Str::random())

            // Simpan data verifikasi email ke dalam database
            $cek = TokenAcsess::create([
                'email' => $email,
                'token' => $token,
            ]);
            event(new Registered($cek));

            Auth::login($cek);

            return redirect('email/verify');

            // Session::flash('status-success', 'success');
            // Session::flash('message', 'Email verifikasi telah dikirim.');
            // return redirect('verify');
        } else {
            // Email tidak ada di database
            // Tampilkan pesan atau lakukan tindakan sesuai kebutuhan
            Session::flash('status', 'failed');
            Session::flash('message', 'Email tidak ditemukan. Silakan mendaftar akun terlebih dahulu.');
            return redirect('verify');
        }
    }
}