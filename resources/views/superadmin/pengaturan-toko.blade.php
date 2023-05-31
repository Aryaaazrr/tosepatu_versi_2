@extends('layouts.app')

@section('title', 'Pengaturan Toko')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-8 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="flex flex-row justify-between mb-8">
                <a href="{{ route('super-create-metode-pengaturan-toko') }}"
                    class="p-3 bg-primary text-white rounded-lg text-sm flex flex-row items-center justify-center hover:shadow-md hover:shadow-primary duration-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path
                            d="M6.5 3c-1.051 0-2.093.04-3.125.117A1.49 1.49 0 002 4.607V10.5h9V4.606c0-.771-.59-1.43-1.375-1.489A41.568 41.568 0 006.5 3zM2 12v2.5A1.5 1.5 0 003.5 16h.041a3 3 0 015.918 0h.791a.75.75 0 00.75-.75V12H2z">
                        </path>
                        <path
                            d="M6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM13.25 5a.75.75 0 00-.75.75v8.514a3.001 3.001 0 014.893 1.44c.37-.275.61-.719.595-1.227a24.905 24.905 0 00-1.784-8.549A1.486 1.486 0 0014.823 5H13.25zM14.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                    <span class="ml-2">Buat Metode Pengiriman</span>
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center text-gray-500">
                    <thead class="text-xs text-white uppercase bg-primary">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengiriman
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metode as $value)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->nama_pengiriman }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->description_pengiriman }}
                                </td>
                                <td class="px-6 py-10 flex flex-row  justify-center">
                                    <a href="{{ route('super-edit-metode-pengaturan-toko', $value->id) }}"
                                        class="flex items-center justify-center font-medium text-yellow-300 dark:text-blue-500 hover:underline">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true" class="w-5 h-5 text-blue-700">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="p-8 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="flex flex-row justify-between mb-8">
                <a href="{{ route('super-create-wilayah-pengaturan-toko') }}"
                    class="p-3 bg-primary text-white rounded-lg text-sm flex flex-row items-center justify-center hover:shadow-md hover:shadow-primary duration-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-5 h-5 stroke-none transition duration-75">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z">
                        </path>
                    </svg>
                    <span class="ml-2">Buat Wilayah</span>
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center text-gray-500">
                    <thead class="text-xs text-white uppercase bg-primary">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Wilayah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status Toko
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wilayah as $value)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->nama_wilayah }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($value->status_toko == 1)
                                        Buka
                                    @else
                                        Tutup Sementara
                                    @endif
                                </td>
                                <td class="px-6 py-10 flex flex-row  justify-center">
                                    <a href="{{ route('super-edit-wilayah-pengaturan-toko', $value->id) }}"
                                        class="flex items-center justify-center font-medium text-yellow-300 dark:text-blue-500 hover:underline">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true" class="w-5 h-5 text-blue-700">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
