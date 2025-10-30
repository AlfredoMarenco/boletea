<div>
    <!--Form to create a new venue-->
    <form wire:submit.prevent="store" class="p-4">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Venue Name <span class="text-red-600">*</span></label>
            <input type="text" wire:model="name" class="w-full border-gray-300 rounded-md py-1">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block text-gray-700 mb-2">Slug</label>
            <input type="text" wire:model="slug" class="w-full border-gray-300 rounded-md py-1 bg-gray-200" disabled>
            @error('slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="state" class="block text-gray-700 mb-2">State <span class="text-red-600">*</span></label>
            <select wire:model="state" class="w-full border-gray-300 rounded-md py-1">
                <!--Estados de mexico-->
                <option value="" disabled selected>Select State</option>
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="Ciudad de México">Ciudad de México</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>
            </select>
            @error('state')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="city" class="block text-gray-700 mb-2">City <span class="text-red-600">*</span></label>
            <input type="text" wire:model="city" class="w-full border-gray-300 rounded-md py-1">
            @error('city')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 mb-2">Address <span class="text-red-600">*</span></label>
            <input type="text" wire:model="address" class="w-full border-gray-300 rounded-md py-1">
            @error('address')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="postal_code" class="block text-gray-700 mb-2">Postal Code <span
                    class="text-red-600">*</span></label>
            <input type="text" wire:model="postal_code" class="w-full border-gray-300 rounded-md py-1">
            @error('postal_code')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="location" class="block text-gray-700 mb-2">URL Google Maps</label>
            <input type="text" wire:model="location" class="w-full border-gray-300 rounded-md py-1">
            @error('location')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 mb-2">Description</label>
            <textarea id="description" wire:model="description" class="w-full border-gray-300 rounded-md" rows="4"></textarea>
            @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex gap-4 justify-end">
            <button type="button" class="px-4 py-2 text-gray-600 bg-gray-100 rounded hover:bg-gray-200"
                wire:click="back">Cancel</button>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Create
                Category</button>
        </div>
    </form>
</div>
