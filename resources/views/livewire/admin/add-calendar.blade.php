<div>
    <div class=" flex flex-row-reverse px-2 pt-4">
        <x-jet-button wire:click="$set('open',true)">Agregar evento</x-jet-button>
    </div>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Agregar evento
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label value="Nombre" />
                <x-jet-input wire:model="title" type="text" placeholder="Nombre del evento" class="w-full" />
                <x-jet-input-error for="title" />
            </div>
            <div>
                <x-jet-label value="Promotor" />
                <x-jet-input wire:model="promotor" type="text" placeholder="Promotor" class="w-full" />
                <x-jet-input-error for="promotor" />
            </div>
            <div>
                <x-jet-label value="Fecha de inicio" />
                <x-jet-input wire:model="start" type="date" class="w-full" />
                <x-jet-input-error for="start" />
            </div>
            <div>
                <x-jet-label value="Hora" />
                <x-jet-input wire:model="time" type="time" class="w-full" />
                <x-jet-input-error for="time" />
            </div>
            <div>
                <x-jet-label value="Estado" />
                {{-- <x-jet-input wire:model="status" type="color" class="w-full" /> --}}
                <select wire:model="status" class="form-control w-full">
                    <option value="1">Reservada</option>
                    <option value="2">Confirmada</option>
                    <option value="3">A la venta</option>
                </select>
                <x-jet-input-error for="status" />
            </div>
            <div>
                <x-jet-label value="Recinto" />
                {{-- <x-jet-input wire:model="status" type="color" class="w-full" /> --}}
                <select wire:model="recinto" class="form-control w-full">
                    <option value="coliseocentenario">Coliseo Centenario</option>
                    <option value="auditoriognp">Auditorio GNP</option>
                    <option value="poliforum">Poliforum</option>
                    <option value="explanadaferia">Explanada feria</option>
                </select>
                <x-jet-input-error for="recinto" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:click="addEvent">Guardar</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
