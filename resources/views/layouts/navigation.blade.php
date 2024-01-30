<div id="navigation" x-data="{ sidebar: false }">
    <nav class="fixed left-0 right-0 top-0 z-50 border-b border-gray-200 bg-white px-4 py-2.5" x-data="{ open: false }">
        <!-- Primary Navigation Menu -->
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex items-center justify-start">
                <button class="mr-2 cursor-pointer rounded-lg p-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 md:hidden"
                    @click="sidebar = ! sidebar">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>
                <!-- Logo -->
                <a class="mr-4 flex items-center justify-between" href="{{ route('dashboard') }}">
                    <x-application-logo class="mr-3 block h-9 w-auto fill-current text-gray-800" />
                    <span class="self-center whitespace-nowrap text-2xl font-semibold">{{ config('app.name', 'Laravel') }}</span>
                </a>

                <form class="hidden md:block md:pl-2" action="#" method="GET">
                    <label class="sr-only" for="topbar-search">Search</label>
                    <div class="relative md:w-64 md:w-96">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                                </path>
                            </svg>
                        </div>
                        <input class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" id="topbar-search"
                            name="email" type="text" placeholder="Search" />
                    </div>
                </form>
            </div>
            <div class="flex items-center lg:order-2">
                <!-- Settings Dropdown -->
                <div class="hidden sm:ms-6 sm:flex sm:items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Profile -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
                        @click="open = ! open">
                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M169.57,46.11a12,12,0,0,1,15.12-7.7L188,39.48V36a12,12,0,0,1,24,0v3.48l3.31-1.07a12,12,0,1,1,7.42,22.82l-3.31,1.08,2,2.82a12,12,0,1,1-19.41,14.1L200,76.42,198,79.23a12,12,0,1,1-19.41-14.1l2-2.82-3.31-1.08A12,12,0,0,1,169.57,46.11ZM236,128A108,108,0,1,1,128,20a109.19,109.19,0,0,1,18,1.49,12,12,0,0,1-4,23.67A85,85,0,0,0,128,44,83.94,83.94,0,0,0,62.05,179.94a83.48,83.48,0,0,1,29-23.42,52,52,0,1,1,74,0,83.48,83.48,0,0,1,29,23.42A83.57,83.57,0,0,0,212,128a85.2,85.2,0,0,0-1.16-14,12,12,0,0,1,23.67-4A109,109,0,0,1,236,128ZM128,148a28,28,0,1,0-28-28A28,28,0,0,0,128,148Zm0,64a83.53,83.53,0,0,0,48.43-15.43,60,60,0,0,0-96.86,0A83.53,83.53,0,0,0,128,212Z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div class="hidden sm:hidden" :class="{ 'block': open, 'hidden': !open }">
            <!-- Responsive Settings Options -->
            <div class="border-t border-gray-200 pb-1 pt-4">
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <aside class="fixed left-0 top-0 z-40 h-screen w-64 border-r border-gray-200 bg-white pt-14 transition-transform md:translate-x-0"
        :class="{ 'transform-none': sidebar, '-translate-x-full': !sidebar }">
        <div class="h-full overflow-y-auto bg-white px-3 py-5">
            <ul class="space-y-2">
                <li>
                    <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <x-slot:icon>
                            <path
                                d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z" />
                        </x-slot:icon>
                        {{ __('Dashboard') }}
                    </x-sidebar-link>
                </li>
                @can('view a role')
                    <li>
                        <x-sidebar-link :href="route('role.index')" :active="request()->routeIs('role.*')">
                            <x-slot:icon>
                                <path
                                    d="M208,20H64A20,20,0,0,0,44,40V60H32a12,12,0,0,0,0,24H44v32H32a12,12,0,0,0,0,24H44v32H32a12,12,0,0,0,0,24H44v20a20,20,0,0,0,20,20H208a20,20,0,0,0,20-20V40A20,20,0,0,0,208,20Zm-4,192H68V44H204ZM100.8,171.37a48,48,0,0,1,70.4,0,12,12,0,0,0,17.6-16.32,72,72,0,0,0-19.21-14.68,44,44,0,1,0-67.19,0,72.12,72.12,0,0,0-19.2,14.68,12,12,0,0,0,17.6,16.32ZM116,112a20,20,0,1,1,20,20A20,20,0,0,1,116,112Z">
                                </path>
                            </x-slot:icon>
                            {{ __('User Role') }}
                        </x-sidebar-link>
                    </li>
                @endcan
            </ul>
        </div>
    </aside>
</div>
