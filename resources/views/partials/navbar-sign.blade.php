<nav class="fixed top-0 z-50 w-full bg-white md:bg-transparent">
    <div class="px-3 py-2 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="/" class="flex md:mr-24">
                    <img src="/img/Logo_ToSepatu_no_bg.png" class="h-20" alt="ToSepatu Logo" />
                    <span
                        class="self-center text-xl font-semibold text-primary hidden md:block whitespace-nowrap ">TOSEPATU.KC</span>
                </a>
                <div class="font-medium text-2xl hidden lg:block">
                    @yield('title')
                </div>
            </div>
            <div class="flex items-center justify-end">
                <div class="flex items-center ml-3">
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        data-dropdown-delay="500" data-dropdown-placement="bottom-end"
                        class="flex items-center text-end justify-end text-sm font-medium text-black rounded-full md:mr-0 focus:ring-2 focus:ring-gray-600 duration-500"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        @if (Auth::user()->foto == null)
                            <img class="w-10 h-10 mr-2 rounded-full" src="{{ asset('img/default.jpg') }}"
                                alt="user photo">
                        @else
                            <img class="w-10 h-10 mr-2 rounded-full"
                                src="{{ asset('uploads/profile/' . Auth::user()->foto) }}" alt="user photo">
                        @endif
                        {{ Auth::user()->username }}
                        <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-auto">
                        <div class="px-4 py-3 text-sm">
                            <div class="font-medium ">{{ Auth::user()->username }}</div>
                            <div class="truncate">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700"
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="{{ route('super-beranda') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Beranda</a>
                            </li>
                            <li>
                                <a href="{{ route('super-pesanan') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Pesanan</a>
                            </li>
                            <li>
                                <a href="{{ route('super-pelanggan') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Pelanggan</a>
                            </li>
                            <li>
                                <a href="{{ route('super-produk') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Produk</a>
                            </li>
                            <li>
                                <a href="{{ route('super-daftar-berita') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Daftar
                                    Berita</a>
                            </li>
                            <li>
                                <a href="{{ route('super-kategori-berita') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Kategori
                                    Berita</a>
                            </li>
                            <li>
                                <a href="{{ route('super-kelola-tim') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Kelola
                                    Tim</a>
                            </li>
                            <li>
                                <a href="{{ route('super-pengaturan-toko') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Pengaturan
                                    Toko</a>
                            </li>
                            <li>
                                <a href="{{ route('super-pengaturan-profil') }}"
                                    class="block px-4 py-2 hover:bg-primary hover:text-white duration-200">Pengaturan Profil</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 text-sm text-primary hover:bg-primary hover:text-white duration-200">Sign
                                out</a>
                        </div>
                    </div>

                </div>
                {{-- <div class="flex items-center ml-3">
                    <div>
                        <button type="button"
                            class="flex mr-10 text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                Neil Sims
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                neil.sims@flowbite.com
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Earnings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</nav>
