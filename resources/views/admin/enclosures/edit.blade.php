<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }} / {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-end p-4 mb-2">
                <a href="{{ route('maps.create',$enclosure) }}" class="py-1.5 px-3 bg-green-600 text-white rounded-md">Create new map</a>
            </div>
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
                <form action="{{ route('enclosures.update', $enclosure) }}" method="post" class="px-8 py-6"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center mb-4">
                        <div>
                            <x-jet-validation-errors for="name" class="ml-4" />
                            <x-jet-label value="Name: *" class="mr-4" />
                            <x-jet-input type="text" name="name" value="{{ $enclosure->name }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="address" class="ml-4" />
                            <x-jet-label value="Address:" class="mr-4" />
                            <x-jet-input type="text" name="address" value="{{ $enclosure->address }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="city" class="ml-4" />
                            <x-jet-label value="City: *" class="mr-4" />
                            <select name="city_id" class=" w-full rounded-md border-gray-300">
                                <option value="" disabled>Selecciona una ciudad</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}"
                                        {{ $city->id == $enclosure->city->id ? 'selected' : '' }}>{{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-jet-validation-errors for="postal_code" class="ml-4" />
                            <x-jet-label value="Postal Code:" class="mr-4" />
                            <x-jet-input type="text" name="postal_code" value="{{ $enclosure->postal_code }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="state" class="ml-4" />
                            <x-jet-label value="State: *" class="mr-4" />
                            <x-jet-input type="text" name="state" value="{{ $enclosure->state }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="url_maps" class="ml-4" />
                            <x-jet-label value="Url Google Maps:" class="mr-4" />
                            <x-jet-input type="text" name="maps_url" value="{{ $enclosure->maps_url }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-validation-errors for="image_url" class="ml-4" />
                            <x-jet-label value="Image:" class="mr-4" />
                            <x-jet-input type="file" name="image_url" class="w-full mr-4" />
                        </div>
                        <div class="mx-auto">
                            @if ($enclosure->image_url)
                                <img src="{{ Storage::url($enclosure->image_url) }}" alt="{{ $enclosure->name }}"
                                    class="w-32 object-cover object-center mr-4" />
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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <p class="text-lg p-6 text-center font-semibold">Mapas del recinto</p>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Name') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Created at') }}
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Updated at') }}
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($enclosure->maps as $map)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $map->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $map->created_at->format('d/m/Y') }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $map->updated_at->format('d/m/Y') }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a class="text-blue-600 hover:text-blue-700"php ar
                                                        href="">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
