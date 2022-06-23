<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }} / {{ __('Edit') }}
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
                <form action="{{ route('categories.update', $category) }}" method="post" class="px-8 py-6">
                    @method('PUT')
                    @csrf
                    <x-jet-validation-errors for="name" class="ml-4" />
                    <div class="flex justify-center items-center">
                        <x-jet-label value="Name:" class="mr-4" />
                        <x-jet-input type="text" name="name" Value="{{ $category->name }}"
                            class="flex-1 mr-4" />
                        <x-jet-button>{{ __('Actualizar') }}</x-jet-button>
                        <form action="{{ route('categories.destroy', $category) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="text-red-600 ml-4">Eliminar</button>
                        </form>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
