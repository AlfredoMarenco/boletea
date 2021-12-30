<div>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Evento - {{ $calendar->title }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-jet-form-section submit="save" class="mb-6">
                <x-slot name="title">
                    Informacion del evento
                </x-slot>

                <x-slot name="description">
                    Complete la informacion necesaria para crear una nueva categoria
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label value="Evento" />
                        <x-jet-input type="text" placeholder="Nombre del evento"
                            class="w-full" />
                        <x-jet-input-error for="createForm.name" />
                    </div>
                </x-slot>

                <x-slot name="actions">

                </x-slot>
            </x-jet-form-section>

        </div>
    </div>
</div>
