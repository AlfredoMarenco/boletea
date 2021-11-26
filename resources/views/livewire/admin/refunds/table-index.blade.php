<div>
    <div class="flex justify-end items-center mb-4 mt-1 bg-gray-100 py-2 mx-4">
        <div class="flex items-center">
            <x-jet-label class="text-xs">Buscador:</x-jet-label>
            <x-jet-input type="text" class="py-0.5 mx-3"></x-jet-input>
        </div>
        <div class="flex items-center ml-3">
            <x-jet-label class="text-xs">Estatus:</x-jet-label>
            <select class="ml-2 py-0.5 rounded-lg border border-gray-100 focus:ring-0 focus:border-indigo-300" wire:model="status">
                <option value="0">Pendiente</option>
                <option value="1">Process</option>
                <option value="2">Complete</option>
                <option value="3">Reject</option>
            </select>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Orden
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Cliente
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Estado
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tramitado
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($refunds as $refund)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $refund->platform }}{{ $refund->order }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $refund->name }}
                                            {{ $refund->lastname }}</div>
                                        <div class="text-sm text-gray-500">{{ $refund->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @switch($refund->status)
                                            @case(0)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-600">
                                                    {{ __('Pending') }}
                                                </span>
                                            @break
                                            @case(1)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-600">
                                                    {{ __('Process') }}
                                                </span>
                                            @break
                                            @case(2)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-600">
                                                    {{ __('Complete') }}
                                                </span>
                                            @break
                                            @case(3)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-600">
                                                    {{ __('Reject') }}
                                                </span>
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{-- {{ $refund->created_at->diffForHumans() }} --}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-3">
                    {{ $refunds->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
