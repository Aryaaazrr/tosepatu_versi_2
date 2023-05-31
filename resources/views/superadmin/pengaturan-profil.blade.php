@extends('layouts.app')

@section('title', 'Pengaturan Profil')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8 flex justify-between">

                <div class="w-full border-2 border-gray-100 rounded-lg mr-2">
                    @if ($user->foto == null)
                        <img src="{{ asset('img/default.jpg') }}" alt="" class="rounded-lg">
                    @else
                        <img src="{{ asset('uploads/profile/' . $user->foto) }}" alt="" class="rounded-lg">
                    @endif
                </div>

                <div class="w-full border-2 border-gray-100 rounded-lg ml-2 p-4">
                    <form class="space-y-6" action="{{ route('super-pengaturan-profil-update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <label for="id_pengguna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                                Pengguna</label>
                            <input type="text" name="id" hidden id="id"
                                class="bg-gray-50 border border-gray-300 hidden text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary w-full p-2.5 duration-500"
                                value="{{ $user->id }}" readonly>
                            <input type="text" name="id_pengguna" id="id_pengguna"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                                value="{{ $user->id_users }}" readonly>
                        </div>
                        <div>
                            <label for="foto"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Pengguna</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="foto" name="foto" type="file">
                        </div>
                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                            <input type="text" name="username" id="username" placeholder="Masukkan Nama Produk"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                                required value="{{ $user->username }}">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email"
                                placeholder="Masukkan Harga Produk"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                                required value="{{ $user->email }}">
                        </div>
                        <div>
                            <label for="alamat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                                 value="{{ $user->alamat }}">
                        </div>
                        <div>
                            <label for="no_telp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Whatsapp</label>
                            <input type="text" name="no_telp" id="no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                                 value="{{ $user->no_telp }}" >
                        </div>

                        <button type="submit"
                            class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Perbarui Profil
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
