<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full text-left">
                        <thead class="bg-state-200">
                            <tr>
                                <th class="bg-slate-100 dark:bg-gray-900 p-4">Name</th>
                                <th class="bg-slate-100 dark:bg-gray-900 p-4">Company name</th>
                                <th class="bg-slate-100 dark:bg-gray-900 p-4">Email</th>
                                <th class="bg-slate-100 dark:bg-gray-900 p-4">Service type</th>
                                <th class="bg-slate-100 dark:bg-gray-900 p-4">Project budget</th>
                                <th class="bg-slate-100 dark:bg-gray-900 p-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td class="p-4">{{ $contact->full_name ?? 'N/A' }}</td>
                                    <td class="p-4">{{ $contact->company_name ?? 'N/A' }}</td>
                                    <td class="p-4">{{ $contact->email ?? 'N/A' }}</td>
                                    <td class="p-4">{{ $contact->formatted_service_type }}</td>
                                    <td class="p-4">{{ $contact->formatted_project_budget }}</td>
                                    <td class="p-4">
                                        <a href="{{ route('contacts.show', $contact->id) }}"
                                            class="text-indigo-600 hover:underline">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center p-4">No data found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
