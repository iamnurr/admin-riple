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
                                <th class="bg-slate-50 p-4">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td class="p-4">Malcolm Lockyer</td>
                                <td class="p-4">1961</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
