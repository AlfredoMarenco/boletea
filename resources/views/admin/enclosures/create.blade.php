<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }} / {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('categories.store') }}" method="post" class="px-8 py-6">
                    @csrf
                    <x-jet-validation-errors for="name" class="ml-4" />
                    <div class="flex justify-center items-center">
                        <x-jet-label value="Name:" class="mr-4"/>
                        <x-jet-input type="text" name="name" class="flex-1 mr-4" />
                        <x-jet-button>{{ __('Save') }}</x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
