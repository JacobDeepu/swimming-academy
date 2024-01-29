<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label class="sr-only" for="simple-search">Search</label>
                            <div class="relative w-full">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-500" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500"
                                    id="simple-search" type="text" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="flex w-full flex-shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
                        <button
                            class="flex items-center justify-center rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                            type="button">
                            <svg class="mr-2 h-3.5 w-3.5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Create role
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-500">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                            <tr>
                                <th class="px-4 py-3" scope="col">Role name</th>
                                <th class="px-4 py-3" scope="col">Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                                <tr class="border-b">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900" scope="row">{{ $role->name }}</th>
                                    <td class="flex items-center px-4 py-3">
                                        <a class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none"
                                            href="{{ route('role.edit', $role) }}">
                                            <svg class="feather feather-check-square mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                            </svg> Edit
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="border-b bg-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900" colspan="2">
                                        {{ __('No roles Found') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $roles->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
