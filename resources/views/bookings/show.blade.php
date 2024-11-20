<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Booking') }} <span>
                {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg> --}}
                |
            </span>
            <span class="text-gray-500 text-sm">{{ __('Show') }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-2 gap-x-4 gap-y-8 p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <label class="mb-1 font-semibold text-slate-800">Booking ID:</label>
                        <p class="text-slate-500">
                            {{ $booking->id }}</p>
                    </div>
                    <div>
                        <label class="mb-1 font-semibold text-slate-800">Name:</label>
                        <p class="text-slate-500">
                            {{ $booking->name }}</p>
                    </div>
                    <div>
                        <label class="mb-1 font-semibold text-slate-800">Email:</label>
                        <p class="text-slate-500">
                            {{ $booking->email }}</p>
                    </div>
                    <div>
                        <label class="mb-1 font-semibold text-slate-800">Time zone:</label>
                        <p class="text-slate-500">
                            {{ $booking->timezone }}</p>
                    </div>
                    <div>
                        <label class="mb-1 font-semibold text-slate-800">Date:</label>
                        <p class="text-slate-500">
                            {{ $booking->date }}</p>
                    </div>
                    <div>
                        <label class="mb-1 font-semibold text-slate-800">Guest Email:</label>
                        <p class="text-slate-500">
                            @foreach ($booking->guest_email as $guestEmail)
                                {{ $guestEmail }},
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
