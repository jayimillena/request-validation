<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200">
            {{ __('Repositories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Repository List</h3>
                    <a href="{{ route('repositories.create') }}" 
                       class="px-4 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700">
                        Add Book to Repositories
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="table-fixed w-full bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                                <th class="w-1/3 py-3 px-4 text-left border-b dark:border-gray-600">Title</th>
                                <th class="w-2/3 py-3 px-4 text-left border-b dark:border-gray-600">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($repositories as $repository)
                            <tr class="border-b dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800">
                                <td class="w-1/3 py-3 px-4 text-gray-900 dark:text-gray-100">{{ $repository->title }}</td>
                                <td class="w-2/3 py-3 px-4 text-gray-700 dark:text-gray-300">{{ $repository->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
