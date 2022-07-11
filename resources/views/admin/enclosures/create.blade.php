<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enclosures') }} / {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('enclosures.store') }}" method="post" class="px-8 py-6" enctype="multipart/form-data">
                    @csrf
                    <x-jet-validation-errors class="ml-4" />
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center mb-4">
                        <div>
                            <x-jet-label value="Name: *" class="mr-4" />
                            <x-jet-input type="text" name="name" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="Address:" class="mr-4" />
                            <x-jet-input type="text" name="address" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="City: *" class="mr-4" />
                            <select name="city_id" class=" w-full rounded-md border-gray-300">
                                <option value="" selected disabled>Selecciona una ciudad</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-jet-label value="Postal Code:" class="mr-4" />
                            <x-jet-input type="text" name="postal_code" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="State: *" class="mr-4" />
                            <x-jet-input type="text" name="state" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="Url Google Maps:" class="mr-4" />
                            <x-jet-input type="text" name="maps_url" class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="Image:" class="mr-4" />
                            <x-jet-input type="file" name="image_url" class="w-full mr-4" />
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-jet-button>{{ __('Save') }}</x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
