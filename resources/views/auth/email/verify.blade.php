@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="flex h-screen justify-center items-center">
            <div class="w-1/3 h-auto bg-white p-6 rounded border-2 border-slate-100">
                <div class="flex justify-center items-center">
                    <img src="/img/Logo_ToSepatu_no_bg.png" alt="logo" width="150px">
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h3 class="text-2xl font-semibold self-center">Verifikasi Email</h3>
                    <div class="font-normal p-2 text-green-950 mt-3 bg-green-300 rounded-md">
                        <p class="w-full">Email Verifikasi berhasil dikirim ke email anda. silahkan cek inbox email anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
