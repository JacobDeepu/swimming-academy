<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
            <div class="p-6">
                <form method="POST" action="{{ route('batch.store') }}">
                    @csrf
                    <input id="status" name="status" type="hidden" value="1">
                    <div class="mb-4 grid gap-4 sm:grid-cols-2">
                        <div>
                            <x-input-label for="name" value="{{ __('Name') }}" />
                            <x-text-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name')" required autofocus />
                        </div>
                        <div>
                            <x-input-label for="level" value="{{ __('Level') }}" />
                            <x-text-input class="mt-1 block w-full" id="level" name="level" type="text" :value="old('level')" required autofocus />
                        </div>
                    </div>
                    <div class="mb-4 grid gap-4 sm:grid-cols-2">
                        <div>
                            <x-input-label for="capacity_min" value="{{ __('Minimum Capacity') }}" />
                            <x-text-input class="mt-1 block w-full" id="capacity_min" name="capacity_min" type="number" :value="old('capacity_min')" required autofocus />
                        </div>
                        <div>
                            <x-input-label for="capacity_max" value="{{ __('Maximum Capacity') }}" />
                            <x-text-input class="mt-1 block w-full" id="capacity_max" name="capacity_max" type="number" :value="old('capacity_max')" required autofocus />
                        </div>
                    </div>
                    <div class="mb-4 grid gap-2 sm:grid-cols-3">
                        <div>
                            <x-input-label for="schedule_id" value="{{ __('Schedule') }}" />
                            <x-select class="mt-1 block w-full" id="schedule_id" name="schedule_id" required autofocus>
                                <option>-- choose --</option>
                                @foreach ($schedules as $schedule)
                                    <option value="{{ $schedule->id }}">{{ $schedule->start_time }}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div>
                            <x-input-label for="instructor_id" value="{{ __('Instructor') }}" />
                            <x-select class="mt-1 block w-full" id="instructor_id" name="instructor_id" required autofocus>
                                <option>-- choose --</option>
                                @foreach ($instructors as $instructor)
                                    <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div>
                            <x-input-label for="pool_id" value="{{ __('Pool') }}" />
                            <x-select class="mt-1 block w-full" id="pool_id" name="pool_id" required autofocus>
                                <option>-- choose --</option>
                                @foreach ($pools as $pool)
                                    <option value="{{ $pool->id }}">{{ $pool->name }}</option>
                                @endforeach
                            </x-select>
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
