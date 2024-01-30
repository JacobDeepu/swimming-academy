<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
            <div class="p-6">
                <form method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div>
                        <x-input-label for="name" value="{{ __('Name') }}" />
                        <x-text-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="email" value="{{ __('Email') }}" />
                        <x-text-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email')" required />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password" value="{{ __('Password') }}" />
                        <x-text-input class="mt-1 block w-full" id="password" name="password" type="password" required autocomplete="new-password" />
                    </div>
                    <h3 class="inline-flex py-4 text-xl font-semibold leading-tight text-gray-800">Roles</h3>
                    <div class="grid grid-cols-4 gap-4">
                        @forelse ($roles as $role)
                            <label class="inline-flex" for="perrmission">
                                <x-checkbox name="roles[]" value="{{ $role->name }}" />
                                <span class="ml-2 text-sm text-gray-600">{{ __($role->name) }}</span>
                            </label>
                        @empty
                            {{ __('No Roles Found') }}
                        @endforelse
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
