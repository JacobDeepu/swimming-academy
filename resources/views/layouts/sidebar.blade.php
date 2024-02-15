<!-- Backdrop -->
<div class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center" x-show="isSidebarOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"></div>
<aside class="z-20 w-64 flex-shrink-0 overflow-y-auto bg-white" x-show="isSidebarOpen" :class="{ 'fixed mt-16 inset-y-0': isSidebarOpen, 'md:!block': !isSidebarOpen }"
    x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="isSidebarOpen = false"
    @keydown.escape="isSidebarOpen = false">
    <div class="py-4 text-gray-500">
        <a class="ml-6 flex items-center text-lg font-bold text-gray-800" href="{{ route('dashboard') }}">
            <x-application-logo class="mr-3 block h-9 w-auto fill-current text-gray-800" />
            {{ config('app.name', 'Laravel') }}
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <x-slot:icon>
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </x-slot:icon>
                    {{ __('Dashboard') }}
                </x-sidebar-link>
            </li>
            @can('view a role')
                <li class="relative px-6 py-3">
                    <x-sidebar-link :href="route('role.index')" :active="request()->routeIs('role.*')">
                        <x-slot:icon>
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <polyline points="17 11 19 13 23 9"></polyline>
                        </x-slot:icon>
                        {{ __('Roles') }}
                    </x-sidebar-link>
                </li>
            @endcan
            @can('view a user')
                <li class="relative px-6 py-3">
                    <x-sidebar-link :href="route('user.index')" :active="request()->routeIs('user.*')">
                        <x-slot:icon>
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </x-slot:icon>
                        {{ __('Users') }}
                    </x-sidebar-link>
                </li>
            @endcan
            @can('view a pool')
                <li class="relative px-6 py-3">
                    <x-sidebar-link :href="route('pool.index')" :active="request()->routeIs('pool.*')">
                        <x-slot:icon>
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </x-slot:icon>
                        {{ __('Pools') }}
                    </x-sidebar-link>
                </li>
            @endcan
            @can('view a schedule')
                <li class="relative px-6 py-3">
                    <x-sidebar-link :href="route('schedule.index')" :active="request()->routeIs('schedule.*')">
                        <x-slot:icon>
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </x-slot:icon>
                        {{ __('Schedules') }}
                    </x-sidebar-link>
                </li>
            @endcan
            @can('view a batch')
                <li class="relative px-6 py-3">
                    <x-sidebar-link :href="route('batch.index')" :active="request()->routeIs('batch.*')">
                        <x-slot:icon>
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </x-slot:icon>
                        {{ __('Batches') }}
                    </x-sidebar-link>
                </li>
            @endcan
            <li class="relative hidden px-6 py-3" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <button class="inline-flex w-full items-center justify-between text-sm font-semibold transition-colors duration-150 hover:text-gray-800" aria-haspopup="true" @click="open = ! open">
                    <span class="inline-flex items-center">
                        <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                        <span class="ml-4">Submenu</span>
                    </span>
                    <svg class="h-4 w-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                        </path>
                    </svg>
                </button>
                <ul class="mt-2 space-y-2 overflow-hidden rounded-md bg-gray-50 p-2 text-sm font-medium text-gray-500 shadow-inner" aria-label="submenu" x-show="open" @click="open = false"
                    x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0">
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                        <a class="w-full" href="#">m1</a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
                        <a class="w-full" href="#">
                            m2
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
