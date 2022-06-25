<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }} / {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-300 text-green-900 px-4 py-4">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-300 text-red-900 px-4 py-4">
                    {{ session('error') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('events.update', $event) }}" method="post" class="px-8 py-6"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <x-jet-validation-errors class="ml-4" />
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center mb-4">
                        <div class="col-span-2">
                            <x-jet-label value="Name: *" class="mr-4" />
                            <x-jet-input type="text" name="name" value="{{ $event->name }}"
                                class="w-full mr-4" />
                        </div>
                        <div class="col-span-2">
                            <x-jet-label value="Slug:" class="mr-4" />
                            <x-jet-input type="text" name="slug" value="{{ $event->slug }}"
                                class="w-full mr-4 bg-gray-200" disabled />
                        </div>
                        <div class="col-span-2">
                            <x-jet-label value="Category: *" class="mr-4" />
                            <select name="category_id" class="rounded border-gray-300 w-full">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $event->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-jet-label value="Image primary:*" class="mr-4" />
                            <x-jet-input type="file" name="image_url" id="image_url" class="w-full mr-4" />
                        </div>
                        <div>
                            @if ($event->image_url)
                                <img src="{{ Storage::url($event->image_url) }}" alt="{{ $event->name }}"
                                    class="w-1/2 object-cover object-center mx-auto">
                            @endif
                        </div>
                        <div>
                            <x-jet-label value="Slider:" class="mr-4" />
                            <x-jet-input type="file" name="slider_url" id="slider_url" class="w-full mr-4" />
                        </div>
                        <div>
                            @if ($event->slider_url)
                                <img src="{{ Storage::url($event->slider_url) }}" alt="{{ $event->name }}"
                                    class="w-full object-cover object-center mx-auto">
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-jet-button>{{ __('Save') }}</x-jet-button>

                    </div>
                </form>
                <form action="{{ route('events.destroy', $event) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="text-red-600 ml-4">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
