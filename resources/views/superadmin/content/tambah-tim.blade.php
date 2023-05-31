@extends('layouts.app')

@section('title', 'Tambah Tim')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8">

                <form class="space-y-6" action="{{ route('super-store-kelola-tim') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="id_karyawan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                            Karyawan</label>
                        <input type="text" name="id_karyawan" id="id_karyawan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            value="{{ $id_users }}" readonly>
                    </div>
                    <div>
                        <label for="wilayah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            Wilayah Karyawan</label>
                        <select id="wilayah" name="wilayah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary hover:cursor-pointer block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($wilayah as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_wilayah }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            Role Karyawan</label>
                        <select id="role" name="role"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary hover:cursor-pointer block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($role as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_role }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Karyawan</label>
                        <input type="text" name="username" id="username" placeholder="Masukkan Nama Karyawan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('username') }}">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Karyawan</label>
                        <input type="text" name="email" id="email" placeholder="Masukkan Email Karyawan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                            Sandi Karyawan</label>
                        <input type="text" name="password" id="password" placeholder="Masukkan Kata Sandi Karyawan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('password') }}">
                    </div>

                    <div class="flex flex-row justify-between">
                        <a href="{{ route('super-kelola-tim') }}"
                            class="text-primary bg-white hover:bg-primary border-2 border-primary hover:text-white focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-500">Kembali</a>
                        <button type="submit"
                            class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Tambah
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
