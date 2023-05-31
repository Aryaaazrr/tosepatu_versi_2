@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="p-8 sm:ml-64">
        <div class="p-10 lg:mt-4 mt-20">

            <div class="grid grid-rows-1 gap-10 mb-8 lg:mt-10 lg:grid-cols-4">
                <div class="flex items-center justify-center h-40 rounded bg-gray-50">
                    <a href="/"
                        class="flex flex-col justify-center items-center w-full h-full p-4 bg-white border-2 border-yellow-400 rounded-lg shadow hover:bg-yellow-100 duration-500">
                        <h5 class="mb-6 text-2xl font-semibold tracking-tight text-yellow-300 dark:text-white">Jumlah Produk
                        </h5>
                        <p class="font-semibold text-yellow-300 text-3xl dark:text-gray-400">{{ $produk }}</p>
                    </a>
                </div>
                <div class="flex items-center justify-center h-40 rounded bg-gray-50 dark:bg-gray-800">
                    <a href="/"
                        class="flex flex-col justify-center items-center w-full h-full p-4 bg-white border-2 border-red-600 rounded-lg shadow hover:bg-red-100 duration-500">
                        <h5 class="mb-6 text-2xl font-semibold tracking-tight text-red-500 dark:text-white">Berita Aktif
                        </h5>
                        <p class="font-semibold text-red-500 text-3xl dark:text-gray-400">{{ $berita }}</p>
                    </a>
                </div>
                <div class="flex items-center justify-center h-40 rounded bg-gray-50 dark:bg-gray-800">
                    <a href="/"
                        class="flex flex-col justify-center items-center w-full h-full p-4 bg-white border-2 border-blue-500 rounded-lg shadow hover:bg-blue-100 duration-500">
                        <h5 class="mb-6 text-2xl font-semibold tracking-tight text-blue-500 dark:text-white">Dalam Proses
                        </h5>
                        <p class="font-semibold text-blue-700 text-3xl dark:text-gray-400">{{ $proses }}</p>
                    </a>
                </div>
                <div class="flex items-center justify-center h-40 rounded bg-gray-50 dark:bg-gray-800">
                    <a href="/"
                        class="flex flex-col justify-center items-center w-full h-full p-4 bg-white border-2 border-orange-400 rounded-lg shadow hover:bg-orange-100 duration-500">
                        <h5 class="mb-6 text-2xl font-semibold tracking-tight text-orange-400 dark:text-white">Total Pesanan
                        </h5>
                        <p class="font-semibold text-orange-400 text-3xl dark:text-gray-400">{{ $total }}</p>
                    </a>
                </div>
            </div>

            <div class="flex flex-row">
                <div class="p-6 w-full bg-white rounded shadow">
                    {!! $chart->container() !!}
                </div>
                <div class="flex flex-col w-1/4 ml-10">
                    <div class="flex flex-col w-full mb-6 bg-white h-auto shadow-md rounded-lg">
                        <div
                            class="flex w-full bg-primary rounded-lg p-4 justify-center items-center font-semibold text-white text-lg">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true" class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 mr-4">
                                <path
                                    d="M14.916 2.404a.75.75 0 01-.32 1.012l-.596.31V17a1 1 0 01-1 1h-2.26a.75.75 0 01-.75-.75v-3.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.5a.75.75 0 01-.75.75h-3.5a.75.75 0 010-1.5H2V9.957a.75.75 0 01-.596-1.372L2 8.275V5.75a.75.75 0 011.5 0v1.745l10.404-5.41a.75.75 0 011.012.32zM15.861 8.57a.75.75 0 01.736-.025l1.999 1.04A.75.75 0 0118 10.957V16.5h.25a.75.75 0 110 1.5h-2a.75.75 0 01-.75-.75V9.21a.75.75 0 01.361-.64z">
                                </path>
                            </svg>
                            Quick Accses
                        </div>
                        <div class="w-full">
                            <ul>
                                <li>
                                    <a href="{{ route('super-create-produk') }}"
                                        class="flex items-center p-5 text-gray-500 hover:bg-gray-100 hover:text-primary duration-500">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M3.75 3A1.75 1.75 0 002 4.75v10.5c0 .966.784 1.75 1.75 1.75h12.5A1.75 1.75 0 0018 15.25v-8.5A1.75 1.75 0 0016.25 5h-4.836a.25.25 0 01-.177-.073L9.823 3.513A1.75 1.75 0 008.586 3H3.75zM10 8a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0v-1.5h-1.5a.75.75 0 010-1.5h1.5v-1.5A.75.75 0 0110 8z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Tambah Produk</span>
                                    </a>
                                    <a href="{{ route('super-create-metode-pengaturan-toko') }}"
                                        class="flex items-center p-5 text-gray-500 hover:bg-gray-100 hover:text-primary duration-500">
                                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                                            <path
                                                d="M6.5 3c-1.051 0-2.093.04-3.125.117A1.49 1.49 0 002 4.607V10.5h9V4.606c0-.771-.59-1.43-1.375-1.489A41.568 41.568 0 006.5 3zM2 12v2.5A1.5 1.5 0 003.5 16h.041a3 3 0 015.918 0h.791a.75.75 0 00.75-.75V12H2z">
                                            </path>
                                            <path
                                                d="M6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM13.25 5a.75.75 0 00-.75.75v8.514a3.001 3.001 0 014.893 1.44c.37-.275.61-.719.595-1.227a24.905 24.905 0 00-1.784-8.549A1.486 1.486 0 0014.823 5H13.25zM14.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Tambah Metode Pengiriman</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white h-auto shadow-md rounded-lg">
                        <div
                            class="flex w-full bg-primary rounded-lg p-4 justify-center items-center font-semibold text-white text-lg">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true" class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 mr-4">
                                <path
                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z">
                                </path>
                            </svg>
                            Status Karyawan
                        </div>
                        <div class="w-full">
                            <ul>
                                @foreach ($karyawan as $item)
                                    <li>
                                        <a href="{{ route('super-show-kelola-tim', $item->id) }}"
                                            class="flex items-center p-5 text-gray-500 hover:bg-gray-100 hover:text-primary duration-500">
                                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                                class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z">
                                                </path>
                                            </svg>
                                            <span class="flex-1 mx-6 whitespace-nowrap">{{ $item->username }}</span>
                                            @if ($item->deleted_at == null)
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    class="flex-shrink-0 w-5 h-5 stroke-none transition duration-75 text-green-500">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z">
                                                    </path>
                                                </svg>
                                            @else
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    class="flex-shrink-0 w-5 h-5 stroke-none transition duration-75 ">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z">
                                                    </path>
                                                </svg>
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{-- {!! $chart->script() !!} --}}
    {{ $chart->script() }}
@endsection
