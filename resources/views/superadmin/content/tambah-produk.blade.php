@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8">

                <form class="space-y-6" action="{{ route('super-store-produk') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="text" name="id_layanan" id="id_layanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            value="{{ $id_produk }}" readonly>
                    </div>
                    <div>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="foto_layanan" name="foto_layanan" type="file">
                    </div>
                    <div>
                        <input type="text" name="nama_layanan" id="nama_layanan" placeholder="Masukkan Nama Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('nama_layanan') }}">
                    </div>
                    <div>
                        <input type="text" name="harga_layanan" id="harga_layanan" placeholder="Masukkan Harga Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('harga_layanan') }}">
                    </div>
                    <div>
                        <input type="text" name="description" id="description" placeholder="Masukkan Deskripsi Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('description') }}">
                    </div>
                    <div>
                        @foreach ($wilayah as $item)
                            <input id="wilayah-{{ $item->id }}" type="checkbox" value="{{ $item->id }}"
                                name="wilayah[]"
                                class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="wilayah-{{ $item->id }}">{{ $item->nama_wilayah }}</label><br>
                        @endforeach
                    </div>

                    <div class="flex flex-row justify-between">
                        <a href="{{ route('super-produk') }}"
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
