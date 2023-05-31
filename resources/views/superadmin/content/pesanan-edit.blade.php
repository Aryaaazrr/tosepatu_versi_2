@extends('layouts.app')

@section('title', 'View Pesanan')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8 ">

                {{-- <div class="w-full border-2 border-yellow-200 rounded-lg ml-2 p-4"> --}}
                <form class="space-y-6" action="{{ route('super-pesanan-update', $pesanan->id) }}" method="POST">
                    @csrf
                    @method('put')

                    <div>
                        <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan Nama Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $users_mobile }}" readonly>
                    </div>
                    <div>
                        <label for="grand_total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grand
                            Total</label>
                        <input type="text" name="grand_total" id="grand_total" placeholder="Masukkan Nama Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $pesanan->grand_total }}" readonly>
                    </div>
                    <div>
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Masukkan Nama Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $pesanan->alamat }}" readonly>
                    </div>
                    <div>
                        <label for="catatan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                        <input type="text" name="catatan" id="catatan" placeholder="Masukkan Nama Produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $pesanan->catatan }}" readonly>
                    </div>
                    <div>
                        <label for="status_pesanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Status Pesanan</label>
                        <select id="status_pesanan" name="status_pesanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary hover:cursor-pointer block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="{{ $pesanan->status_pesanan }}">{{ $pesanan->status_pesanan }}</option>
                            @foreach ($status as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="karyawan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Pilih Karyawan</label>
                        <select id="karyawan" name="karyawan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary hover:cursor-pointer block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}">{{ $item->username }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="flex flex-row justify-between">
                        <a href="{{ route('super-pesanan') }}"
                            class="text-primary bg-white hover:bg-primary border-2 border-primary hover:text-white focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-500">Kembali</a>
                        <button type="submit"
                            class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Perbarui Status
                        </button>
                    </div>
                </form>
                {{-- </div> --}}

            </div>

        </div>
    </div>
@endsection
