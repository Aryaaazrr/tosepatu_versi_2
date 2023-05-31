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
                    <p class="w-10/12 text-center mt-3 text-slate-400">Masukkan alamat email anda</p>
                </div>
                @if (session('status'))
                    <div class="text-center font-normal p-2 text-red-950 mt-4 bg-red-300 rounded-md">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('status-success'))
                    <div class="text-center font-normal p-2 text-green-950 mt-4 bg-green-300 rounded-md">
                        {{ session('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="font-normal p-2 text-red-950 mt-3 bg-red-300 rounded-md">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="post">
                    @csrf
                    <div class="flex flex-col mt-6">
                        <label for="email" class="text-slate-400">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan Email"
                            class="w-full h-12 mt-2 border border-gray-400 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-primary duration-500">
                    </div>
                    <div class="flex flex-col mt-10 mb-8">
                        <button type="submit"
                            class="w w-full bg-primary rounded-md h-12 text-white hover:bg-teal-600 duration-500">Kirim
                            Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
