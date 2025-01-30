<div>
    <nav class="fixed z-20 w-full bg-gray-800" x-data="{ isOpen: false }">


        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">


                {{-- LINKNYA --}}
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="flex items-baseline ml-10 space-x-4">
                            <x-navbar.nav-link href="/">Home</x-navbar.nav-link>
                            <x-navbar.nav-link href="/about">About</x-navbar.nav-link>
                            <x-navbar.nav-link href="/contact">Contact</x-navbar.nav-link>
                            <x-navbar.nav-link href="/gallery">Gallery</x-navbar.nav-link>
                            <x-navbar.nav-link href="/articles">Articles</x-navbar.nav-link>
                            <x-navbar.nav-link href="/users">Users</x-navbar.nav-link>
                        </div>
                    </div>
                </div>
                {{-- LINKNYA --}}


                {{-- DROPDOWN --}}
                <div class="hidden md:block">
                    <div class="flex items-center ml-4 md:ml-6">


                        <div class="relative ml-3">


                            {{-- TOMBOL PROFILENYA --}}
                            <div>
                                <button type="button" @click="isOpen = !isOpen"
                                    class="relative flex items-center max-w-xs text-sm bg-gray-800 rounded-full active:ring-2 active:ring-white active:outline-hidden"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="rounded-full size-8"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </button>
                            </div>
                            {{-- TOMBOL PROFILENYA --}}


                            {{-- MENU PROFILNYA --}}
                            <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 all"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 all"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black/5 focus:outline-hidden"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-1">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                    tabindex="-1" id="user-menu-item-2">Sign out</a>
                            </div>
                            {{-- MENU PROFILNYA --}}


                        </div>
                    </div>
                </div>
                {{-- DROPDOWN --}}


                {{-- DROPDOWN BUTTON - MOBILE --}}
                <div class="flex -mr-2 md:hidden">
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center p-2 text-gray-400 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white active:ring-2 active:ring-white active:outline-hidden"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="size-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="size-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                {{-- DROPDOWN BUTTON - MOBILE --}}


            </div>
        </div>


        {{-- VERSI MOBILE --}}
        <div class="md:hidden" id="mobile-menu" x-show="isOpen"
            x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">


            {{-- LINKNYA --}}
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <x-navbar.dropdown-item href="/">Home</x-navbar.dropdown-item>
                <x-navbar.dropdown-item href="/about">About</x-navbar.dropdown-item>
                <x-navbar.dropdown-item href="/contact">Contact</x-navbar.dropdown-item>
                <x-navbar.dropdown-item href="/gallery">Gallery</x-navbar.dropdown-item>
                <x-navbar.dropdown-item href="/articles">articles</x-navbar.dropdown-item>
                <x-navbar.dropdown-item href="/users">Users</x-navbar.dropdown-item>
            </div>
            {{-- LINKNYA --}}


            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img class="rounded-full size-10"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <div class="ml-3">
                        <div class="font-medium text-white text-base/5">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                    </div>
                    <button type="button"
                        class="relative p-1 ml-auto text-gray-400 bg-gray-800 rounded-full shrink-0 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </button>
                </div>
                <div class="px-2 mt-3 space-y-1">
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Your
                        Profile</a>
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Settings</a>
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Sign
                        out</a>
                </div>
            </div>
        </div>
        {{-- VERSI MOBILE --}}


    </nav>
</div>
