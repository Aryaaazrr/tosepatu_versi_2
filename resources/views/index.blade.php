@extends('layouts.main')

@section('content')
    <!-- Awal Home Section -->
    <section class="pt-36 pb-36 land" id="home" class="section_home">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="font-bold text-slate-50 px-4 py-6 text-3xl top-56 md:-top-10 md:text-6xl md:px-10">
                        Layanan Jasa Cuci Sepatu</h1>
                    <p class="font-normal text-slate-50 text-sm px-4 py-4 mb-12 md:text-lg md:px-10 md:mt-15 md:mb-10">
                        ToSepatu merupakan usaha dalam bidang jasa cuci sepatu yang
                        menyediakan beberapa layanan cuci sepatu dengan harga terjangkau,
                        layanan cepat, dan hasil yang tepat.
                    </p>
                    <a href="#mobileapp"
                        class="font-normal text-sm py-2 px-7 md:text-base md:py-3 md:px-10 bg-slate-50 text-dark border-collapse rounded-lg md:ml-11 ml-4 hover:bg-transparent hover:text-white hover:border hover:border-white duration-500">Pesan
                        Sekarang</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-10 lg:right-0">
                        <div class="image">
                            <img src="img/new-pair-white-sneakers-isolated-white 1 (1).png" alt="White Sneakers"
                                class="animate-wiggle" />
                        </div>
                    </div>
                    <span class="absolute -bottom-0 -z-10 -top-1 left-1/2 -translate-x-1/2 items-center justify-center">
                        <svg width="1500" height="900" viewBox="0 0 1682 739" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 96.575C0 51.3202 0 28.6928 14.0589 14.6339C28.1177 0.575012 50.7452 0.575012 96 0.575012H1586C1631.25 0.575012 1653.88 0.575012 1667.94 14.6339C1682 28.6928 1682 51.3202 1682 96.575V138.575C1682 421.418 1682 562.839 1594.13 650.707C1506.26 738.575 1364.84 738.575 1082 738.575H96C50.7452 738.575 28.1177 738.575 14.0589 724.516C0 710.457 0 687.83 0 642.575V96.575Z"
                                fill="url(#paint0_linear_21_19)" />
                            <defs>
                                <linearGradient id="paint0_linear_21_19" x1="119" y1="105.125" x2="740.637"
                                    y2="1427.47" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#1D6FA3" />
                                    <stop offset="1" stop-color="#65FDF0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Home Section -->

    <!-- Awal tentang -->
    <section class="lg:pt-36 pb-32 land lg:pt-48" id="tentang">
        <div class="container">
            <div class="flex flex-wrap lg:flex-nowrap">
                <div class="w-full px-4 lg:w-1/2 lg:mr-10">
                    <div class="mx-auto text-center mb-16">
                        <h3 class="font-bold text-center text-dark text-3xl mb-3 lg:text-start">Tentang Kami</h3>
                        <p class="text-center mb-5 lg:text-start">
                            Terbentuknya kami ber-awal dari sekelompok pertemanan yang sedang memikirkan kehidupan untuk
                            mengisi
                            waktu luang.
                            Dimulainya bisnis ini pada tanggal 21 September 2022, sementara sampai saat ini
                            tempatnya berada di Kabupaten Jember.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4">
                    <div class="flex flex-wrap items-center justify-center lg:flex-nowrap lg:-mt-20">
                        <div
                            class="flex flex-wrap justify-center items-center bg-white drop-shadow-2xl w-2/3 h-max py-10 mb-20 rounded-3xl lg:w-1/4 lg:mr-12">
                            <img src="/img/box-1.png" alt="box-1" height="200px" width="180px"
                                class="flex items-center justify-center" />
                            <h5 class="text-center text-lg mt-4 text-dark font-bold w-9/12">Struktur layanan bisnis yang
                                kompeten.</h5>
                        </div>
                        <div
                            class="flex flex-wrap justify-center items-center bg-white drop-shadow-2xl w-2/3 h-max py-10 mb-20 rounded-3xl lg:w-1/4 lg:mr-12 lg:mt-48">
                            <img src="/img/box-2.png" alt="box-1" height="200px" width="150px"
                                class="flex items-center justify-center" />
                            <h5 class="text-center text-lg mt-4 mx-3 text-dark font-bold">Kinerja tim solid untuk
                                kenyamanan bersama.</h5>
                        </div>
                        <div
                            class="flex flex-wrap justify-center items-center bg-white drop-shadow-2xl w-2/3 h-max py-10 mb-20 rounded-3xl lg:w-1/4">
                            <img src="/img/box-3.png" alt="box-1" height="200px" width="200px"
                                class="flex items-center justify-center" />
                            <h5 class="text-center text-lg mt-4 mx-3 text-dark font-bold">Pelayanan cepat demi kepuasan
                                pelanggan.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Tentang -->

    <!-- Awal Layanan -->
    <section class="pt-36 pb-32 land bg-tosca" id="layanan">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Layanan</h4>
                    <h3 class="font-bold text-dark text-3xl mb-4">Best Selling</h3>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet consectetur,
                        adipisicing
                        elit. Iure adipisci labore natus voluptatum
                        dolores? Itaque hic natus accusantium iusto pariatur voluptatum, provident consequuntur. Fugit,
                        consectetur. Commodi ullam incidunt atque repellendus.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img width="360" height="200" src="/img/layanan-1.png" alt="deepclean" class="w-full" />
                        <div class="py-8 px-6">
                            <h5>
                                <a href="#layanan"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Deep
                                    Clean</a>
                            </h5>
                            <p class="font-medium text-base text-secondary mb-6">
                                layanan pertama ini untuk cuci sepatu semua bagian seperti Upper, Midsole, Outsole,
                                Insole serta
                                tali sepatu.
                            </p>
                            <a href="#layanan"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img width="360" height="200" src="/img/layanan-2.png" alt="deepclean" class="w-full" />
                        <div class="py-8 px-6">
                            <h5>
                                <a href="#layanan"
                                    class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Deep
                                    Clean ( Sepatu Putih )</a>
                            </h5>
                            <p class="font-medium text-base text-secondary mb-6">
                                Pada layanan ini hanya dikhususkan untuk sepatu yang dominan putih. Layanan ini untuk
                                cuci
                                sepatu
                                bagian seperti Upper, Midsole, Outsole, Insole serta tali sepatu.
                            </p>
                            <a href="#layanan"
                                class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Layanan -->

    <!-- Awal Cara Kerja -->
    <section class="pt-36 pb-32 land" id="carakerja">
        <div class="container">
            <div
                class="flex flex-wrap flex-col bg-white w-full rounded-xl drop-shadow-2xl overflow-hidden mb-10 px-4 py-8">
                <h3 class="font-bold text-dark text-3xl mb-7 lg:text-5xl lg:mt-10 lg:-mb-30 lg:ml-12">Cara Kerja</h3>
                <div class="lg:flex lg:flex-row lg:justify-between lg:-mt-16">
                    <div
                        class="w-full flex items-start lg:w-1/2 lg:flex-nowrap lg:justify-center lg:items-center lg:mt-20">
                        <div class="w-full h-full flex flex-col lg:ml-12">
                            <div class="flex flex-wrap flex-row w-full justify-between mb-10">
                                <div class="flex items-center justify-between w-full h-12">
                                    <p class="w-3/4 lg:text-xl">Daftar akun melalui website kami.</p>
                                    <div
                                        class="justify-end -right-1/4 self-end text-center border-4 bg-primary drop-shadow-xl border-primary h-full w-12 justify-items-center items-center">
                                        <span class="text-center font-bold text-3xl text-white">01</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap flex-row w-full justify-between mb-10">
                                <div class="flex items-center justify-between w-full h-12">
                                    <p class="w-3/4 lg:text-xl">Setelah daftar akun berhasil silahkan masuk pada aplikasi.
                                    </p>
                                    <div
                                        class="justify-end -right-1/4 self-end text-center border-2 bg-white drop-shadow-xl border-primary h-full w-12 justify-items-center items-center">
                                        <span class="text-center font-bold text-3xl text-primary items-center">02</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap flex-row w-full justify-between mb-10">
                                <div class="flex items-center justify-between w-full h-12">
                                    <p class="w-3/4 lg:text-xl">Pilih layanan yang tersedia dan buat pesanan.</p>
                                    <div
                                        class="justify-end -right-1/4 self-end text-center border-2 bg-white drop-shadow-xl border-primary h-full w-12 justify-items-center items-center">
                                        <span class="text-center font-bold text-3xl text-primary items-center">03</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap flex-row w-full justify-between mb-10">
                                <div class="flex items-center justify-between w-full h-12">
                                    <p class="w-3/4 lg:text-xl">Tunggu status pesanan terkonfimasi oleh admin.</p>
                                    <div
                                        class="justify-end -right-1/4 self-end text-center border-2 bg-white drop-shadow-xl border-primary h-full w-12 justify-items-center items-center">
                                        <span class="text-center font-bold text-3xl text-primary items-center">04</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap flex-row w-full justify-between mb-10">
                                <div class="flex items-center justify-between w-full h-12">
                                    <p class="w-3/4 lg:text-xl">Setelah konfirmasi, pesanan akan di proses.</p>
                                    <div
                                        class="justify-end -right-1/4 self-end text-center border-2 bg-white drop-shadow-xl border-primary h-full w-12 justify-items-center items-center">
                                        <span class="text-center font-bold text-3xl text-primary items-center">05</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap w-full justify-end mb-10 lg:w-1/2 lg:items-end lg:flex-nowrap lg:-mt-10">
                        <img src="/img/cara-kerja.png" alt="cara-kerja" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Cara Kerja -->

    <!-- Awal mobile app -->
    {{-- <section class="pt-36 pb-32 bg-grey land" id="mobileapp">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 flex item-center justify-center">
                    <img src="/img/Android-gambar.png" alt="mobileapp" />
                </div>
                <div class="w-full px-4">
                    <h3 class=" font-bold text-dark text-3xl text-center py-6">Unduh aplikasi ini</h3>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna, ac
                        interdum in at eget. Egestas lacinia at id sagittis convallis dui
                        lorem eget id. Cursus pulvinar tempor, netus dis. Curabitur potenti
                        vitae, malesuada dui laoreet tincidunt tristique pellentesque tellus.
                        Molestie arcu sit quam sit. Purus in sapien ultrices sit morbi neque,
                        ipsum, ac. Integer at nulla libero, volutpat molestie amet enim at.
                        Cras a tincidunt condimentum sit nec amet, congue sed tincidunt. Id
                        vel vestibulum at consectetur justo aliquet a.
                    </p>
                    <a href="#" title="Download Aplikasi Di PlayStore" class="flex items-center justify-center">
                        <img src="/img/google-play-store.png" alt="playstore" class="android" width="200px" />
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Akhir mobile app -->
@endsection
