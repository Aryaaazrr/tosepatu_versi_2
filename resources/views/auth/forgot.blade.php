@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="flex h-screen justify-center items-center">
            <div class="w-1/3 h-auto bg-white p-6 rounded border-2 border-slate-100">
              <div class="flex justify-center items-center">
                <img src="/img/Logo_ToSepatu_no_bg.png" alt="logo" width="150px">  
              </div>
              <div class="flex flex-col justify-center items-center">  
                <h3 class="text-2xl font-semibold self-center">Lupa Kata Sandi</h3>
                <p class="w-10/12 text-center mt-3 text-slate-400">Masukkan alamat email anda</p>
              </div>
              <form action="" method="post">
                @csrf
                <div class="flex flex-col mt-10">
                  <label for="email" class="text-slate-400">Email</label>
                  <input type="email" name="email" id="email" placeholder="Masukkan Email" class="w-full h-12 mt-2 border border-gray-400 rounded-md py-2 px-4 focus:outline-none focus:ring-2 focus:ring-primary duration-500">
                </div>
                <div class="flex flex-col mt-10 mb-8">
                  <button type="submit" class="w w-full bg-primary rounded-md h-12 text-white hover:bg-teal-600 duration-500">Kirim Link</button>
                </div>
              </form>
            </div>
        </div>
    </div>
@endsection
