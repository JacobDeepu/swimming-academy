<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
            <div class="p-6">
                <form method="POST" action="{{ route('schedule.store') }}">
                    @csrf
                    <input type="hidden" id="status" name="status" value="1">
                    <div class="mb-4 grid gap-4 sm:grid-cols-2">
                        <div>
                            <x-input-label for="name" value="{{ __('Start Time') }}" />
                            <x-text-input class="mt-1 block w-full" id="start_time" name="start_time" type="time" :value="old('start_time')" required autofocus />
                        </div>
                        <div>
                            <x-input-label for="name" value="{{ __('End Time') }}" />
                            <x-text-input class="mt-1 block w-full" id="end_time" name="end_time" type="time" :value="old('end_time')" required autofocus />
                        </div>
                    </div>
                    <h3 class="inline-flex py-4 text-xl font-semibold leading-tight text-gray-800">Days</h3>
                    <div class="grid grid-cols-4 gap-4">
                        @forelse ($days as $day)
                            <label class="inline-flex" for="perrmission">
                                <x-checkbox name="days[]" value="{{ $day->id }}" />
                                <span class="ml-2 text-sm text-gray-600">{{ __($day->name) }}</span>
                            </label>
                        @empty
                            {{ __('No Days Found') }}
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
