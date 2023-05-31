@extends('layouts.app')

@section('title', 'Kelola Tim')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-8 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="flex flex-row justify-between mb-8">
                <a href="{{ route('super-create-kelola-tim') }}"
                    class="p-3 bg-primary text-white rounded-lg text-sm flex flex-row items-center justify-center hover:shadow-md hover:shadow-primary duration-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-5 h-5 stroke-none transition duration-75">
                        <path
                            d="M11 5a3 3 0 11-6 0 3 3 0 016 0zM2.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 018 18a9.953 9.953 0 01-5.385-1.572zM16.25 5.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z">
                        </path>
                    </svg>
                    <span class="ml-2">Tambah Tim</span>
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
                            placeholder="Cari Tim...">
                    </div>
                </div> --}}
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center text-gray-500">
                    <thead class="text-xs text-white uppercase bg-primary">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Foto Karyawan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Id Karyawan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Karyawan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No. Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $value)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td
                                    class="px-6 py-4 flex font-medium justify-center items-center text-gray-900 whitespace-nowrap">
                                    <img src="{{ asset('img/default.jpg') }}" alt="foto_users"
                                        class="w-10 flex items-center justify-center rounded-full">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->id_users }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->username }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->no_telp }}
                                </td>
                                <td class="px-6 py-10 flex flex-row  justify-center">
                                    <a href="{{ route('super-show-kelola-tim', $value->id) }}"
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
