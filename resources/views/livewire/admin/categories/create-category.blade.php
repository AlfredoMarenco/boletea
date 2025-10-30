<div>
    <!--Form to create a new category-->
    <form wire:submit.prevent="store" class="p-4">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Category Name <span
                    class="text-red-600">*</span></label>
            <input type="text" wire:model="name" class="w-full border-gray-300 rounded-md">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block text-gray-700 mb-2">Slug</label>
            <input type="text" wire:model="slug" class="w-full border-gray-300 rounded-md bg-gray-200" disabled>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 mb-2">Description</label>
            <textarea id="description" wire:model="description" class="w-full border-gray-300 rounded-md" rows="4"></textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex gap-4 justify-end">
            <button type="button" class="px-4 py-2 text-gray-600 bg-gray-100 rounded hover:bg-gray-200"
                wire:click="back">Cancel</button>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Create
                Category</button>
        </div>
    </form>
</div>
