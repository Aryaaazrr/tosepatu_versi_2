@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8 flex justify-between">

                <div class="w-full border-2 border-yellow-200 rounded-lg mr-2">
                    <img src="{{ asset('uploads/produk/' . $produk->foto_layanan) }}" alt="" class="rounded-lg">
                </div>

                <div class="w-full border-2 border-yellow-200 rounded-lg ml-2 p-4">
                    <form class="space-y-6" action="{{ route('super-update-produk', $produk->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <label for="id_layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Produk</label>
                            <input type="text" name="id_layanan" id="id_layanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            value="{{ $produk->id_layanan }}" readonly>
                        </div>
                        <div>
                            <label for="foto_layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Produk</label>
                            <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="foto_layanan" name="foto_layanan" type="file">
                        </div>
                        <div>
                            <label for="nama_layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                            <input type="text" name="nama_layanan" id="nama_layanan" placeholder="Masukkan Nama Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $produk->nama_layanan }}">
                        </div>
                        <div>
                            <label for="harga_layanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Produk</label>
                            <input type="text" name="harga_layanan" id="harga_layanan"
                            placeholder="Masukkan Harga Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $produk->harga_layanan }}">
                        </div>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
                            <input type="text" name="description" id="description"
                            placeholder="Masukkan Deskripsi Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $produk->description }}">
                        </div>
                        <div>
                            <label for="dibuat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dibuat pada</label>
                            <input type="text" name="dibuat" id="dibuat"
                            placeholder="Masukkan Deskripsi Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $produk->created_at }}" readonly>
                        </div>
                        <div>
                            <label for="terakhir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terakhir diperbarui</label>
                            <input type="text" name="terakhir" id="terakhir"
                                placeholder="Masukkan Deskripsi Produk"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                                required value="{{ $produk->updated_at }}" readonly>
                        </div>

                        <div class="flex flex-row justify-between">
                            <a href="{{ route('super-produk') }}"
                                class="text-primary bg-white hover:bg-primary border-2 border-primary hover:text-white focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-500">Kembali</a>
                            <button type="submit"
                                class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Perbarui Produk
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
