@extends('layouts.app')

@section('title', 'Lihat Detail Tim')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8">

            <div class="max-w-4xl flex items-center justify-center h-auto  flex-wrap mx-auto my-32 lg:my-0">
                <div id="profile"
                    class="w-full lg:w-3/5 flex items-center justify-center  rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


                    <div class="p-4 md:p-12 text-center lg:text-left">
                        <div class="rounded-full shadow-xl mx-auto mb-8 -mt-16 h-48 w-48 bg-cover bg-center">
                            <img src="{{ asset('img/default.jpg') }}"
                                class="rounded-full shadow-2xl block">
                        </div>

                        <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $kelolaTim->username }}</h1>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                        <p class="pt-4 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true" class="h-4 fill-current text-primary pr-4">
                                <path
                                    d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z">
                                </path>
                                <path
                                    d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z">
                                </path>
                            </svg> {{ $kelolaTim->email }}
                        </p>
                        <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true" class="h-4 fill-current text-primary pr-4">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z">
                                </path>
                            </svg> {{ $kelolaTim->alamat }}
                        </p>
                        <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true" class="h-4 fill-current text-primary pr-4">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z">
                                </path>
                            </svg> {{ $kelolaTim->no_telp }}
                        </p>
                        <p class="pt-8 text-sm">Anggota Tim ToSepatu Sebagai Role {{ $role->nama_role }} di wilayah
                            {{ $wilayah->nama_wilayah }} sejak saat {{ $kelolaTim->email_verified_at }}</p>

                        <div class="pt-12 pb-8">
                            <a href="{{ route('super-edit-kelola-tim', $kelolaTim->id) }}"
                                class="text-white bg-yellow-300 hover:bg-yellow-400 border-2 border-yellow-300 hover:border-yellow-400 mr-2 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-500">
                                Edit Tim
                            </a>
                            <a href="{{ route('super-kelola-tim') }}"
                                class="text-primary bg-white hover:bg-primary border-2 border-primary hover:text-white focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-500">
                                Kembali
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
