@extends('layouts.app')

@section('title', 'Pesanan')

@section('content')
    <div class="p-10 mt-20 lg:ml-72 sm:ml-64">
        <div class="p-4 bg-white h-auto border-2 border-gray-100 rounded-lg">
            <div class="flex flex-row justify-between mb-8">
                {{-- <a href="{{ route('super-create-produk') }}"
                class="p-3 bg-primary text-white rounded-lg text-sm flex flex-row items-center justify-center hover:shadow-md hover:shadow-primary duration-500"><svg
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    class="flex-shrink-0 w-5 h-5 stroke-none transition duration-75 hover:text-primary">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M3.75 3A1.75 1.75 0 002 4.75v10.5c0 .966.784 1.75 1.75 1.75h12.5A1.75 1.75 0 0018 15.25v-8.5A1.75 1.75 0 0016.25 5h-4.836a.25.25 0 01-.177-.073L9.823 3.513A1.75 1.75 0 008.586 3H3.75zM10 8a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0v-1.5h-1.5a.75.75 0 010-1.5h1.5v-1.5A.75.75 0 0110 8z">
                    </path>
                </svg>
                <span class="ml-2">Semua pelanggan</span>
            </a> --}}
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
                                ID Pesanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Pesanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status Pesanan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $value)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->grand_total }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($value->status_pesanan == 'Menunggu Konfirmasi')
                                        <div class="w-full flex justify-center items-center">
                                            <div
                                                class=" w-1/2 bg-green-500 rounded-3xl uppercase text-xs text-white p-2 hover:bg-green-600 duration-500">
                                                {{ $value->status_pesanan }}
                                            </div>
                                        </div>
                                    @elseif ($value->status_pesanan == 'Proses')
                                        <div class="w-full flex justify-center items-center">
                                            <div
                                                class=" w-1/2 bg-blue-500 rounded-3xl uppercase text-xs text-white p-2 hover:bg-blue-600 duration-500">
                                                {{ $value->status_pesanan }}
                                            </div>
                                        </div>
                                    @elseif ($value->status_pesanan == 'Selesai')
                                        <div class="w-full flex justify-center items-center">
                                            <div
                                                class=" w-1/2 bg-orange-400 rounded-3xl uppercase text-xs text-white p-2 hover:bg-orange-500 duration-500">
                                                {{ $value->status_pesanan }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="w-full flex justify-center items-center">
                                            <div
                                                class=" w-1/2 bg-red-500 rounded-3xl uppercase text-xs text-white p-2 hover:bg-orange-600 duration-500">
                                                {{ $value->status_pesanan }}
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($value->status_pesanan == 'Menunggu Konfirmasi')
                                        <a href="{{ route('super-pesanan-edit', $value->id) }}"
                                            class="flex items-center justify-center font-medium text-yellow-300 dark:text-blue-500 hover:underline">
                                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true" class="w-5 h-5 text-blue-700">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z">
                                                </path>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="{{ route('super-pesanan-show', $value->id) }}"
                                            class="flex items-center justify-center font-medium text-yellow-300 dark:text-blue-500 hover:underline">
                                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true" class="w-5 h-5 text-blue-700">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
