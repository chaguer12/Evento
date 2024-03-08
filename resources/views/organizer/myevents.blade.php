<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dear Organizer,
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="  text-gray-900">
                    <div class=" mx-auto bg-white  rounded shadow">
                        <h2 class="text-xl font-bold my-4">Event Table</h2>
                        <table class="w-full border-collapse">
    <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2 text-left">Image</th>
            <th class="border px-4 py-2 text-left">Title</th>
            <th class="border px-4 py-2 text-left">Description</th>
            <th class="border px-4 py-2 text-left">Address</th>
            <th class="border px-4 py-2 text-left">Approved?</th>
            <th class="border px-4 py-2 text-left">Actions</th> <!-- New column for actions -->
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
        <tr class="hover:bg-gray-100">
            <td class="border px-4 py-2">
                <img src="{{asset('storage/'.$event->image->path)}}" alt="Event Image" class="w-16 h-16">
            </td>
            <td class="border px-4 py-2">{{$event->title}}</td>
            <td class="border px-4 py-2">{{$event->description}}</td>
            <td class="border px-4 py-2">{{$event->location}}</td>
            <td class="border px-4 py-2">
                @if($event->approved == 1)
                <span class="text-green-600">Yes</span>
                @else
                <span class="text-red-600">No</span>
                @endif
            </td>
            <td class="border px-4 py-2">
                <a href="{{ route('event.edit', $event->id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                <form action="{{ route('event.destroy', $event->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
