<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Map') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-14">

                    {{-- Formulario para crear un nuevo mapa --}}
                    @if ($create)
                        <form wire:submit.prevent='create_map()'>
                            <div>
                                <x-jet-label value="Name" />
                                <x-jet-input type="text" class="block mt-1 w-full" wire:model="name"
                                    placeholder="Name form this map" />
                                @error('name')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <x-jet-label value="Description" />
                                <textarea class="border-gray-200 rounded-md w-full" rows="5" wire:model="description" placeholder="Description"></textarea>
                                @error('description')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex justify-end">
                                <x-jet-button class="mt-4">
                                    {{ __('Create') }}
                                </x-jet-button>
                            </div>
                        </form>
                    @endif
                    {{-- Formulario para delimitar el numero de categorias de precios --}}
                    @if ($category_price)
                        <form wire:submit.prevent='setCategoriesPrice({{ $categories_price }})'>
                            <div>
                                <x-jet-label value="Numero de categorias de precio" />
                                <x-jet-input type="text" class="block mt-1 w-full" wire:model="categories_price"
                                    placeholder="Name form this map" />
                                @error('categories_price')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex justify-end">
                                <x-jet-button class="mt-4">
                                    {{ __('Create') }}
                                </x-jet-button>
                            </div>
                        </form>
                    @endif
                    {{-- Formulario para asignar el nombre y los colores de las categorias de precios --}}
                    @if ($category_price_create)
                        <form wire:submit.prevent='create_categories_price()'>
                            @for ($i = 1; $i <= $categories_price; $i++)
                                <div class="flex items-center space-x-6">
                                    <x-jet-label value="Categoria {{ $i }}" />
                                    <x-jet-input type="text" class="block mt-1 w-2/3"
                                        wire:model="category_price_name.{{ $i }}" placeholder="Name" />
                                    <input type="color" wire:model="category_price_color.{{ $i }}">
                                    <x-jet-input-error for="category_price_name.{{ $i }}" />
                                    <x-jet-input-error for="category_price_color.{{ $i }}" />
                                </div>
                            @endfor
                            <div class="flex justify-end">
                                <x-jet-button class="mt-4">
                                    {{ __('Next') }}
                                </x-jet-button>
                            </div>
                        </form>
                    @endif
                    {{-- Formulario para delimitar el numero de secciones del mapa --}}
                    @if ($sections)
                        <form wire:submit.prevent='setSections({{ $sections_count }})'>
                            <div>
                                <x-jet-label value="Numero de secciones" />
                                <x-jet-input type="text" class="block mt-1 w-full" wire:model="sections_count" />
                                @error('sections_count')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex justify-end">
                                <x-jet-button class="mt-4">
                                    {{ __('Create') }}
                                </x-jet-button>
                            </div>
                        </form>
                    @endif
                    {{-- Formulario para asignar los nombres a las secciones del mapa --}}
                    @if ($sections_create)
                        <form wire:submit.prevent='create_sections()'>
                            @for ($i = 1; $i <= $sections_count; $i++)
                                <div class="border-gray-100 shadow-lg p-4 text-center">
                                    <p>Seccion {{ $i }}</p>
                                    <div class="mb-1">
                                        <x-jet-label value="Nombre de la seccion" class="mt-2" />
                                        <x-jet-input type="text" wire:model="section_name.{{ $i }}" />
                                        <x-jet-input-error for="section_name.{{ $i }}" />
                                    </div>
                                    <div class="mb-1">
                                        <x-jet-label value="Nombre real" class="mt-2" />
                                        <x-jet-input type="text"
                                            wire:model="section_name_real.{{ $i }}" />
                                        <x-jet-input-error for="section_name_real.{{ $i }}" />
                                    </div>
                                    {{-- <div class="mb-1">
                                        <x-jet-label value="Categoria de precio" class="mt-2" />
                                        <select wire.model="section_price_category_id.{{ $i }}" class="rounded-lg border-gray-300" wire:key='section_price_category_id.{{ $i }}' >
                                            @foreach ($prices_categories as $price_category)
                                                <option value="{{ $price_category->id }}">{{ $price_category->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-jet-input-error for="section_price_category_id.{{ $i }}" />
                                    </div> --}}
                                    <div class="mb-1">
                                        <x-jet-label value="Capacidad" class="mt-2" />
                                        <x-jet-input type="number"
                                            wire:model="section_capacity.{{ $i }}" />
                                        <x-jet-input-error for="section_capacity.{{ $i }}" />
                                    </div>
                                </div>
                            @endfor
                            <div class="flex justify-end">
                                <x-jet-button class="mt-4">
                                    {{ __('Next') }}
                                </x-jet-button>
                            </div>
                        </form>
                    @endif
                    @if ($set_categories)
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre real</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Categoria de precio</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Capacidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($map->sections as $section)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $section->name_section }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $section->name_real }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{-- {{ $section->price_category }} --}}
                                                        @if ($section->price_category)
                                                            Completada
                                                        @else
                                                            <x-jet-button>
                                                                {{ __('Completar') }}
                                                            </x-jet-button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $section->capacity }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <x-jet-button class="mt-4" wire:click="return">
                        {{ __('Back') }}
                    </x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>
