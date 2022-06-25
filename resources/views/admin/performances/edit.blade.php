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
                <form action="{{ route('performances.update', $performance) }}" method="post" class="px-8 py-6"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <x-jet-validation-errors class="ml-4" />
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center mb-4">
                        <div class="col-span-2">
                            <x-jet-label value="Event: *" class="mr-4" />
                            <select name="event_id" class="rounded border-gray-300 w-full">
                                <option value="" selected disabled>Selecciona un evento</option>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}"
                                        {{ $performance->event_id == $event->id ? 'selected' : '' }}>{{ $event->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2">
                            <x-jet-label value="Name: *" class="mr-4" />
                            <x-jet-input type="text" name="name" value="{{ $performance->name }}" class="w-full mr-4" />
                        </div>
                        <div class="col-span-2">
                            <x-jet-label value="Enclosure: *" class="mr-4" />
                            <select name="enclosure_id" class="rounded border-gray-300 w-full">
                                <option value="" selected disabled>Selecciona un recinto</option>
                                @foreach ($enclosures as $enclosure)
                                    <option value="{{ $enclosure->id }}"
                                        {{ $performance->enclosure_id == $enclosure->id ? 'selected' : '' }}>
                                        {{ $enclosure->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-jet-label value="Date start: *" class="mr-4" />
                            <x-jet-input type="date" name="date_start" value="{{ $performance->date_start }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="Time start: *" class="mr-4" />
                            <x-jet-input type="time" name="time_start" value="{{ $performance->time_start }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="Date end: *" class="mr-4" />
                            <x-jet-input type="date" name="date_end" value="{{ $performance->date_end }}"
                                class="w-full mr-4" />
                        </div>
                        <div>
                            <x-jet-label value="Time end: *" class="mr-4" />
                            <x-jet-input type="time" name="time_end" value="{{ $performance->time_end }}"
                                class="w-full mr-4" />
                        </div>
                        <div class="col-span-2">
                            <x-jet-label value="Status" class="mr-4" />
                            <select name="status" class="rounded border-gray-300 w-full">
                                <option value="" selected disabled>Selecciona una opcion</option>
                                <option value="0" {{ $performance->status == 0 ? 'selected' : '' }}>Desactivado
                                </option>
                                <option value="1" {{ $performance->status == 1 ? 'selected' : '' }}>Activo</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <x-jet-label value="Description:" class="mr-4" />
                            <textarea class="w-full mr-4" name="description" rows="5">{{ $performance->description }}</textarea>
                        </div>
                        <div>
                            <x-jet-label value="Image primary: *" class="mr-4" />
                            <x-jet-input type="file" name="image_url" id="image_url" class="w-full mr-4" />
                        </div>
                        <div>
                            @if ($performance->image_url)
                                <img src="{{ Storage::url($performance->image_url) }}" alt="{{ $performance->name }}"
                                    class="w-1/2 object-cover object-center mx-auto">
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-jet-button>{{ __('Save') }}</x-jet-button>
                    </div>
                </form>
                <form action="{{ route('performances.destroy', $performance) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="text-red-600 ml-4">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
