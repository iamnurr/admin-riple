<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full text-left">
                        <thead class="bg-state-200">
                            <tr>
                                <th class="bg-slate-50 p-4">Name</th>
                                <th class="bg-slate-50 p-4">Email</th>
                                <th class="bg-slate-50 p-4">Date</th>
                                <th class="bg-slate-50 p-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bookings as $booking)
                                <tr>
                                    <td class="p-4">{{ $booking->name }}</td>
                                    <td class="p-4">{{ $booking->email}}</td>
                                    <td class="p-4">{{ $booking->date}}</td>
                                    <td class="p-4"></td>
                                        <a href="{{ route('bookings.show', $booking->slug) }}" class="text-indigo-600 hover:underline">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="p-4">No data found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $bookings->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
