@extends('layouts.app')

@section('title', 'Produk')

@section('content')

    <div class="p-10 mt-20 lg:ml-72 sm:ml-64">
        <div class="p-4 bg-white h-auto border-2 border-gray-100 rounded-lg">
            <div class="flex flex-row justify-between mb-8">
                <a href="{{ route('super-create-produk') }}"
                    class="p-3 bg-primary text-white rounded-lg text-sm flex flex-row items-center justify-center hover:shadow-md hover:shadow-primary duration-500"><svg
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-5 h-5 stroke-none transition duration-75 hover:text-primary">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M3.75 3A1.75 1.75 0 002 4.75v10.5c0 .966.784 1.75 1.75 1.75h12.5A1.75 1.75 0 0018 15.25v-8.5A1.75 1.75 0 0016.25 5h-4.836a.25.25 0 01-.177-.073L9.823 3.513A1.75 1.75 0 008.586 3H3.75zM10 8a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0v-1.5h-1.5a.75.75 0 010-1.5h1.5v-1.5A.75.75 0 0110 8z">
                        </path>
                    </svg>
                    <span class="ml-2">Tambah Produk</span>
                </a>
                {{-- <div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-primary focus:border-primary duration-500"
                            placeholder="Cari Produk...">
                    </div>
                </div> --}}
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center text-gray-500">
                    <thead class="text-xs text-white uppercase bg-primary">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Foto Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $value)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row"
                                    class="px-6 py-4 flex font-medium justify-center items-center text-gray-900 whitespace-nowrap">
                                    <img src="{{ asset('uploads/produk/' . $value->foto_layanan) }}" alt="foto_layanan"
                                        class="w-10 flex items-center justify-center rounded-full">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $value->id_layanan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->nama_layanan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ currency_IDR($value->harga_layanan) }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('super-edit-produk', $value->id) }}"
                                        class="font-medium text-yellow-300 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="{{ route('super-destroy-produk', $value->id) }}"
                                        class="font-medium text-red-600 dark:text-blue-500 hover:underline">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
