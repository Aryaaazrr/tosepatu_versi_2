<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-72 h-screen pt-32 transition-transform -translate-x-full bg-white sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('super-beranda') }}"
                    class="flex items-center p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    @if (request()->route()->uri == 'superadmin/beranda') id="active" @endif>
                    <svg aria-hidden="true" class="w-6 h-6 stroke-none transition duration-75 hover:text-primary"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('super-pesanan') }}"
                    class="flex items-center p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    @if (request()->route()->uri == 'superadmin/pesanan') id="active" @endif
                    @if (request()->route()->uri == 'superadmin/pesanan/{id}') id="active" @endif>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M6 5v1H4.667a1.75 1.75 0 00-1.743 1.598l-.826 9.5A1.75 1.75 0 003.84 19H16.16a1.75 1.75 0 001.743-1.902l-.826-9.5A1.75 1.75 0 0015.333 6H14V5a4 4 0 00-8 0zm4-2.5A2.5 2.5 0 007.5 5v1h5V5A2.5 2.5 0 0010 2.5zM7.5 10a2.5 2.5 0 005 0V8.75a.75.75 0 011.5 0V10a4 4 0 01-8 0V8.75a.75.75 0 011.5 0V10z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pesanan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('super-pelanggan') }}"
                    class="flex items-center p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    @if (request()->route()->uri == 'superadmin/pelanggan') id="active" @endif>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path
                            d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Pelanggan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('super-produk') }}"
                    class="flex items-center p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    @if (request()->route()->uri == 'superadmin/produk') id="active" @endif>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10.362 1.093a.75.75 0 00-.724 0L2.523 5.018 10 9.143l7.477-4.125-7.115-3.925zM18 6.443l-7.25 4v8.25l6.862-3.786A.75.75 0 0018 14.25V6.443zm-8.75 12.25v-8.25l-7.25-4v7.807a.75.75 0 00.388.657l6.862 3.786z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Produk</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example"
                    @if (request()->route()->uri == 'superadmin/daftar-berita') id="active" @endif
                    @if (request()->route()->uri == 'superadmin/kategori-berita') id="active" @endif>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path
                            d="M13.92 3.845a19.361 19.361 0 01-6.3 1.98C6.765 5.942 5.89 6 5 6a4 4 0 00-.504 7.969 15.974 15.974 0 001.271 3.341c.397.77 1.342 1 2.05.59l.867-.5c.726-.42.94-1.321.588-2.021-.166-.33-.315-.666-.448-1.004 1.8.358 3.511.964 5.096 1.78A17.964 17.964 0 0015 10c0-2.161-.381-4.234-1.08-6.155zM15.243 3.097A19.456 19.456 0 0116.5 10c0 2.431-.445 4.758-1.257 6.904l-.03.077a.75.75 0 001.401.537 20.902 20.902 0 001.312-5.745 1.999 1.999 0 000-3.545 20.902 20.902 0 00-1.312-5.745.75.75 0 00-1.4.537l.029.077z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Berita</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('super-daftar-berita') }}"
                            class="flex items-center w-full p-5 text-gray-900 rounded-lg pl-14 hover:bg-gray-100 hover:text-primary duration-500"
                            @if (request()->route()->uri == 'superadmin/daftar-berita') id="active" @endif>Daftar
                            Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('super-kategori-berita') }}"
                            class="flex items-center w-full p-5 text-gray-900 rounded-lg pl-14 hover:bg-gray-100 hover:text-primary duration-500"
                            @if (request()->route()->uri == 'superadmin/kategori-berita') id="active" @endif>Kategori
                            Berita</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('super-kelola-tim') }}"
                    class="flex items-center p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    @if (request()->route()->uri == 'superadmin/kelola-tim') id="active" @endif>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path
                            d="M10 9a3 3 0 100-6 3 3 0 000 6zM6 8a2 2 0 11-4 0 2 2 0 014 0zM1.49 15.326a.78.78 0 01-.358-.442 3 3 0 014.308-3.516 6.484 6.484 0 00-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 01-2.07-.655zM16.44 15.98a4.97 4.97 0 002.07-.654.78.78 0 00.357-.442 3 3 0 00-4.308-3.517 6.484 6.484 0 011.907 3.96 2.32 2.32 0 01-.026.654zM18 8a2 2 0 11-4 0 2 2 0 014 0zM5.304 16.19a.844.844 0 01-.277-.71 5 5 0 019.947 0 .843.843 0 01-.277.71A6.975 6.975 0 0110 18a6.974 6.974 0 01-4.696-1.81z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Kelola Tim</span>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('super-laporan') }}"
                    class="flex items-center p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    @if (request()->route()->uri == 'superadmin/laporan') id="active" @endif>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 3.5A1.5 1.5 0 013.5 2h9A1.5 1.5 0 0114 3.5v11.75A2.75 2.75 0 0016.75 18h-12A2.75 2.75 0 012 15.25V3.5zm3.75 7a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zm0 3a.75.75 0 000 1.5h4.5a.75.75 0 000-1.5h-4.5zM5 5.75A.75.75 0 015.75 5h4.5a.75.75 0 01.75.75v2.5a.75.75 0 01-.75.75h-4.5A.75.75 0 015 8.25v-2.5z">
                        </path>
                        <path d="M16.5 6.5h-1v8.75a1.25 1.25 0 102.5 0V8a1.5 1.5 0 00-1.5-1.5z"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Laporan</span>
                </a>
            </li> --}}
            <li class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                <button type="button"
                    class="flex items-center w-full p-5 text-gray-900 rounded-lg hover:bg-gray-100 hover:text-primary duration-500"
                    aria-controls="dropdown-pengaturan" data-collapse-toggle="dropdown-pengaturan"
                    @if (request()->route()->uri == 'superadmin/pengaturan-toko') id="active" @endif
                    @if (request()->route()->uri == 'superadmin/pengaturan-profil') id="active" @endif>
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 stroke-none transition duration-75 hover:text-primary">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Pengaturan</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-pengaturan" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('super-pengaturan-toko') }}"
                            class="flex items-center w-full p-5 text-gray-900 rounded-lg pl-14 hover:bg-gray-100 hover:text-primary duration-500" @if (request()->route()->uri == 'superadmin/pengaturan-toko') id="active" @endif>Pengaturan
                            Toko</a>
                    </li>
                    <li>
                        <a href="{{ route('super-pengaturan-profil') }}"
                            class="flex items-center w-full p-5 text-gray-900 rounded-lg pl-14 hover:bg-gray-100 hover:text-primary duration-500" @if (request()->route()->uri == 'superadmin/pengaturan-profil') id="active" @endif>Pengaturan
                            Profil</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
