@extends('layouts.app')

@section('title', 'Tambah Daftar Berita')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8">

                <form class="space-y-6" action="{{ route('super-store-daftar-berita') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="text" name="nama_berita" id="nama_berita" placeholder="Masukkan Nama Berita"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('nama_berita') }}">
                    </div>
                    <div>
                        <select id="kategori" name="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary hover:cursor-pointer block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($kategori_berita as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kategori_berita }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="foto_berita" name="foto_berita" type="file">
                    </div>
                    <div>
                        <input type="text" name="description_berita" id="description_berita" placeholder="Masukkan Deskripsi Berita"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('description_berita') }}">
                    </div>
                    <div>
                        <input type="text" name="potongan" id="potongan" placeholder="Masukkan Potongan tanpa %"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ old('potongan') }}">
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
                        <a href="{{ route('super-kategori-berita') }}"
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
