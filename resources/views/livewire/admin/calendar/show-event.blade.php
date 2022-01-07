<div>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Evento - {{ $calendar->title }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-jet-form-section submit="update" class="mb-6">
                <x-slot name="title">
                    Informacion del evento
                </x-slot>

                <x-slot name="description">
                    Complete la informacion necesaria para crear una nueva categoria
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-6">
                        <h1>Evento agregado por: <span class="font-bold">{{ $calendar->user->name }}</span></h1>
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label value="Evento" />
                        <x-jet-input type="text" placeholder="Nombre del evento" wire:model="title"
                            class="w-full" />
                        <x-jet-input-error for="title" />
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <x-jet-label value="Promotor" />
                        <x-jet-input type="text" placeholder="Nombre del promotor" wire:model="promotor"
                            class="w-full" />
                        <x-jet-input-error for="promotor" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label value="Fecha" />
                        <x-jet-input type="date" wire:model="start" class="w-full" />
                        <x-jet-input-error for="start" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label value="Hora" />
                        <x-jet-input type="time" wire:model="time" class="w-full" />
                        <x-jet-input-error for="time" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label value="Status" />
                        <select wire:model="status" class="form-control w-full">
                            <option value="1">Reservada</option>
                            <option value="2">Confirmada</option>
                            <option value="3">A la venta</option>
                        </select>
                        <x-jet-input-error for="status" />
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <x-jet-label value="Recinto" />
                        <select wire:model="recinto" class="form-control w-full">
                            <option value="coliseocentenario">Coliseo Centenario</option>
                            <option value="auditoriognp">Auditorio GNP</option>
                            <option value="poliforum">Poliforum</option>
                            <option value="explanadaferia">Explanada feria</option>
                        </select>
                        <x-jet-input-error for="recinto" />
                    </div>
                </x-slot>

                <x-slot name="actions">
                    <x-jet-danger-button class="mr-2" wire:click="delete">Borrar</x-jet-danger-button>
                    <x-jet-button wire:click="update">Actualizar</x-jet-button>
                </x-slot>
            </x-jet-form-section>

        </div>
    </div>
</div>
