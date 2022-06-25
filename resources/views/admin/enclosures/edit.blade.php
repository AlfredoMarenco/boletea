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
                <form action="{{ route('enclosures.update', $enclosure) }}" method="post" class="px-8 py-6" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center mb-4">
                        <div>
                            <x-jet-validation-errors for="name" class="ml-4" />
                            <x-jet-label value="Name: *" class="mr-4" />
                            <x-jet-input type="text" name="name" value="{{ $enclosure->name }}" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="address" class="ml-4" />
                            <x-jet-label value="Address:" class="mr-4" />
                            <x-jet-input type="text" name="address" value="{{ $enclosure->address }}" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="city" class="ml-4" />
                            <x-jet-label value="City: *" class="mr-4" />
                            <x-jet-input type="text" name="city" value="{{ $enclosure->city }}" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="postal_code" class="ml-4" />
                            <x-jet-label value="Postal Code:" class="mr-4" />
                            <x-jet-input type="text" name="postal_code" value="{{ $enclosure->postal_code }}" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="state" class="ml-4" />
                            <x-jet-label value="State: *" class="mr-4" />
                            <x-jet-input type="text" name="state" value="{{ $enclosure->state }}" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="url_maps" class="ml-4" />
                            <x-jet-label value="Url Google Maps:" class="mr-4" />
                            <x-jet-input type="text" name="maps_url" value="{{ $enclosure->maps_url }}" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="image_url" class="ml-4" />
                            <x-jet-label value="Image:" class="mr-4" />
                            <x-jet-input type="file" name="image_url" class="w-full mr-4" />
                        </div>
                        <div class="mx-auto">
                            @if ($enclosure->image_url)
                                <img src="{{ Storage::url($enclosure->image_url) }}" alt="{{ $enclosure->name }}" class="w-32 object-cover object-center mr-4" />
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-jet-button>{{ __('Update') }}</x-jet-button>

                    </div>
                </form>

                <form action="{{ route('enclosures.destroy', $enclosure) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="text-red-600 ml-4">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
