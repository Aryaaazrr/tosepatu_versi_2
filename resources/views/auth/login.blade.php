@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="flex h-screen justify-center items-center">
            <div class="w-1/3 h-auto bg-white p-6 rounded border-2 border-slate-100">
                <div class="flex justify-center items-center">
                    <img src="/img/Logo_ToSepatu_no_bg.png" alt="logo" width="150px">
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h3 class="text-2xl font-semibold self-center">Masuk</h3>
                    <p class="w-10/12 text-center mt-3 text-slate-400">Masukkan email dan kata sandi Anda di bawah ini</p>
                </div>

                @if (session('status'))
                    <div class="text-center font-normal p-2 text-red-950 mt-4 bg-red-300 rounded-md">
                        {{ session('message') }}
                    </div>
                @endif

                <form action="" method="post">
                    @csrf
                    <div class="flex flex-col mt-6">
                        <label for="email" class="text-slate-400">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email') }}"
                            class="w-full h-12 mt-2 border border-gray-400 rounded-md py-2 px-4 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary duration-500">
                    </div>
                    <div class="grid grid-cols-2 mt-6">
                        <label for="password" class="text-slate-400">Kata Sandi</label>
                        <a href="{{ route('forgot') }}"
                            class="text-slate-400 text-xs text-end col-end-5 relative mt-2 hover:text-primary duration-500">Lupa
                            Kata
                            Sandi?</a>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi"
                        class="w-full h-12 mt-2 border border-gray-400 rounded-md py-2 px-4 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary duration-500">
                    <div class="flex flex-col mt-10 mb-8">
                        <button type="submit"
                            class="w w-full bg-primary rounded-md h-12 text-white hover:bg-teal-600 duration-500">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
