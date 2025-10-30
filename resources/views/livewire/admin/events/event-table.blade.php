<div>
    <!-- Link to create a new event -->
    <div class="p-4 flex justify-end">
        <a href="{{ route('events.create') }}"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">Create New Event</a>
    </div>
    <!-- Table displaying the list of events -->
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Image
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Title
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Category
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Date
                    </th>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($events as $event)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <img src="{{ asset($event->image) }}" alt="">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $event->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $event->category }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $event->fecha }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4 p-6">
        {{ $events->links() }}
    </div>
</div>
