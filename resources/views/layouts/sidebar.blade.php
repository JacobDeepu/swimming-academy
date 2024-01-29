<aside class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-14 transition-transform md:translate-x-0">
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
