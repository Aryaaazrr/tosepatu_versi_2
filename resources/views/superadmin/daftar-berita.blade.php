@extends('layouts.app')

@section('title', 'Daftar Berita')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-8 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="flex flex-row justify-between mb-8">
                <a href="{{ route('super-create-daftar-berita') }}"
                    class="p-3 bg-primary text-white rounded-lg text-sm flex flex-row items-center justify-center hover:shadow-md hover:shadow-primary duration-500">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-5 h-5 stroke-none transition duration-75">
                        <path
                            d="M13.92 3.845a19.361 19.361 0 01-6.3 1.98C6.765 5.942 5.89 6 5 6a4 4 0 00-.504 7.969 15.974 15.974 0 001.271 3.341c.397.77 1.342 1 2.05.59l.867-.5c.726-.42.94-1.321.588-2.021-.166-.33-.315-.666-.448-1.004 1.8.358 3.511.964 5.096 1.78A17.964 17.964 0 0015 10c0-2.161-.381-4.234-1.08-6.155zM15.243 3.097A19.456 19.456 0 0116.5 10c0 2.431-.445 4.758-1.257 6.904l-.03.077a.75.75 0 001.401.537 20.902 20.902 0 001.312-5.745 1.999 1.999 0 000-3.545 20.902 20.902 0 00-1.312-5.745.75.75 0 00-1.4.537l.029.077z">
                        </path>
                    </svg>
                    <span class="ml-2">Buat Berita</span>
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
                                Foto Berita
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Berita
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Potongan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status Berita
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $value)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td
                                    class="px-6 py-4 flex font-medium justify-center items-center text-gray-900 whitespace-nowrap">
                                    <img src="{{ asset('uploads/berita/' . $value->foto_berita) }}" alt="foto_users"
                                        class="w-10 flex items-center justify-center rounded-full">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->nama_berita }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->description_berita }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $value->potongan . '%' }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($value->status_berita == 1)
                                        Aktif
                                    @else
                                        Kadaluwarsa
                                    @endif
                                </td>
                                <td class="px-6 py-10 flex flex-row  justify-center">
                                    <a href="{{ route('super-edit-daftar-berita', $value->id) }}"
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
