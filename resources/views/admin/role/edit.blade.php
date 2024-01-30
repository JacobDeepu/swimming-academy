<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('role.update', $role) }}">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="name" value="{{ __('Name') }}" />
                            <x-text-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name', $role->name)" required autofocus autocomplete="name" />
                        </div>
                        <h3 class="inline-flex py-4 text-xl font-semibold leading-tight text-gray-800">Permissions</h3>
                        <div class="grid grid-cols-4 gap-4">
                            @forelse ($permissions as $permission)
                                <label class="inline-flex" for="perrmission">
                                    <x-checkbox name="permissions[]" value="{{ $permission->name }}" :checked="in_array($permission->id, $role_has_permissions)" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __($permission->name) }}</span>
                                </label>
                            @empty
                                {{ __('No Permissions Found') }}
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
    </div>
</x-app-layout>
