<header class="z-10 bg-white py-4 shadow-md">
    <div class="container mx-auto flex h-full items-center justify-between px-6 text-purple-600">
        <!-- Mobile hamburger -->
        <button class="focus:shadow-outline-purple -ml-1 mr-5 rounded-md p-1 focus:outline-none md:hidden" aria-label="Menu" @click="isSidebarOpen = !isSidebarOpen">
            <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <!-- Search input -->
        <div class="flex flex-1 justify-center lg:mr-32">
            <div class="relative mr-6 w-full max-w-xl focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="h-4 w-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input
                    class="focus:shadow-outline-purple form-input w-full rounded-md border-0 bg-gray-100 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 focus:border-purple-300 focus:bg-white focus:placeholder-gray-500 focus:outline-none"
                    type="text" aria-label="Search" placeholder="Search" />
            </div>
        </div>
        <ul class="flex flex-shrink-0 items-center space-x-6">
            <!-- Profile menu -->
            <li class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <button class="focus:shadow-outline-purple rounded-full align-middle focus:outline-none" aria-label="Account" aria-haspopup="true" @click="open = ! open">
                    <img class="h-8 w-8 rounded-full object-cover"
                        src="{{ asset('images/user.png')}}"
                        alt="" aria-hidden="true" />
                </button>
                <ul class="absolute right-0 mt-2 w-56 space-y-2 rounded-md border border-gray-100 bg-white p-2 text-gray-600 shadow-md" aria-label="submenu" x-show="open"
                    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="open = false"
                    @keydown.escape="open = false">
                    <li class="flex">
                        <a class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800"
                            href="{{ route('profile.edit') }}">
                            <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>{{ __('Profile') }}</span>
                        </a>
                    </li>
                    <li class="flex">
                        <a class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800" href="#">
                            <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>{{ __('Settings') }}</span>
                        </a>
                    </li>
                    <li class="flex">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800"
                                href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                                <span>{{ __('Log Out') }}</span>
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>
