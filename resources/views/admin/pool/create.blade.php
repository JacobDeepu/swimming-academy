<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
            <div class="p-6">
                <form method="POST" action="{{ route('pool.store') }}">
                    @csrf
                    <div class="mb-4 grid gap-4 sm:grid-cols-2">
                        <div>
                            <x-input-label for="name" value="{{ __('Name') }}" />
                            <x-text-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div>
                            <x-input-label for="location" value="{{ __('Location') }}" />
                            <x-text-input class="mt-1 block w-full" id="location" name="location" type="text" :value="old('location')" required autofocus autocomplete="location" />
                        </div>
                        <div class="sm:col-span-2">
                            <x-input-label for="description" value="{{ __('Description') }}" />
                            <x-textarea class="mt-1 block w-full" id="description" name="description" :value="old('description')" />
                        </div>
                    </div>
                    <div class="mt-4 flex">
                        <x-primary-button>
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
