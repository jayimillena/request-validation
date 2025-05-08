<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200">
            {{ __('Repositories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                    Add New Repository
                </h3>

                <form action="{{ route('repositories.store') }}" method="post">
                    @csrf  

                    <!-- Title -->
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 dark:text-gray-300 font-medium">Title</label>
                        <input type="text" name="title" placeholder="Enter a title..." 
                               class="w-full mt-1 px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-900 dark:text-white">
                        @error('title') 
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 dark:text-gray-300 font-medium">Description</label>
                        <textarea name="description" rows="3" placeholder="Enter a description..."
                                  class="w-full mt-1 px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-900 dark:text-white"></textarea>
                        @error('description') 
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" 
                                class="px-6 py-2 text-blue-500 rounded-md shadow hover:bg-blue-700 transition duration-300">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
