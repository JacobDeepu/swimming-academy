<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Cards -->
        <div class="mb-8 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center rounded-lg bg-white p-4 shadow-sm">
                <div class="mr-4 rounded-full bg-orange-100 p-3 text-orange-500">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        Total Students
                    </p>
                    <p class="text-lg font-semibold text-gray-700">
                        6389
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center rounded-lg bg-white p-4 shadow-sm">
                <div class="mr-4 rounded-full bg-green-100 p-3 text-green-500">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        Fees Collected
                    </p>
                    <p class="text-lg font-semibold text-gray-700">
                        46,760.00
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center rounded-lg bg-white p-4 shadow-sm">
                <div class="mr-4 rounded-full bg-blue-100 p-3 text-blue-500">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        New Students
                    </p>
                    <p class="text-lg font-semibold text-gray-700">
                        376
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center rounded-lg bg-white p-4 shadow-sm">
                <div class="mr-4 rounded-full bg-teal-100 p-3 text-teal-500">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="18" y1="8" x2="23" y2="13"></line>
                        <line x1="23" y1="8" x2="18" y2="13"></line>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600">
                        Absentees
                    </p>
                    <p class="text-lg font-semibold text-gray-700">
                        35
                    </p>
                </div>
            </div>
        </div>
        <!-- Charts -->
        <div class="mb-8 grid gap-6 md:grid-cols-2">
            <div class="min-w-0 rounded-lg bg-white p-4 shadow-sm">
                <h4 class="mb-4 font-semibold text-gray-800">
                    Fees
                </h4>
                <canvas id="pie"></canvas>
                <div class="mt-4 flex justify-center space-x-3 text-sm text-gray-600">
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span class="mr-1 inline-block h-3 w-3 rounded-full bg-blue-500"></span>
                        <span>Paid</span>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-1 inline-block h-3 w-3 rounded-full bg-teal-600"></span>
                        <span>Unpaid</span>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-1 inline-block h-3 w-3 rounded-full bg-purple-600"></span>
                        <span>Dues</span>
                    </div>
                </div>
            </div>
            <div class="min-w-0 rounded-lg bg-white p-4 shadow-sm">
                <h4 class="mb-4 font-semibold text-gray-800">
                    Attendence
                </h4>
                <canvas id="line"></canvas>
                <div class="mt-4 flex justify-center space-x-3 text-sm text-gray-600">
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span class="mr-1 inline-block h-3 w-3 rounded-full bg-teal-600"></span>
                        <span>Preset</span>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-1 inline-block h-3 w-3 rounded-full bg-purple-600"></span>
                        <span>Absent</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/chart.js') }}" type="module"></script>
</x-app-layout>
