<div>
    <!-- Button to create a new category -->
    <div class="p-4 flex justify-end">
        <a wire:click="createCategory()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
            Create New Category
        </a>
    </div>

    <!-- Table from categories will go here -->
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 ">
            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                #
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
            </th>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900 bg-gray-100">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $category->description }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <a href="{{ route('categories.edit', $category) }}"
                            class="text-indigo-600 hover:text-indigo-900 px-2">Edit</a>
                        <a wire:click="modalDestroy({{ $category }})" class="text-red-600 hover:text-red-900 cursor-pointer">Delete</a>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-4">
        {{ $categories->links() }}
    </div>

    <div>
        @if ($destroying)
                <!-- Confirmation dialog -->
                <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
                    <div class="bg-white p-6 rounded shadow-lg">
                        <h3 class="text-lg font-medium mb-4">Confirm Deletion</h3>
                        <p class="mb-4">Are you sure you want to delete this category?</p>
                        <div class="flex justify-end space-x-4">
                            <button wire:click="cancelDestroy"
                                class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancel</button>
                            <button wire:click="confirmDestroy"
                                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
</div>
