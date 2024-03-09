<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dear Organizer,
        </h2>
    </x-slot>
    <section>
    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
            <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-green-500 text-md">
                                <span class="font-bold">0%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path class="heroicon-ui" d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z"/></svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800">{{ $notApprovedEvents }}</p>
                        <p class="text-lg text-center text-gray-500">Not Approved Event</p>
                    </div>
                </div>
    
                <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-red-500 text-md">
                                <span class="font-bold">0%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path class="heroicon-ui" d="M20 9a1 1 0 012 0v8a1 1 0 01-1 1h-8a1 1 0 010-2h5.59L13 10.41l-3.3 3.3a1 1 0 01-1.4 0l-6-6a1 1 0 011.4-1.42L9 11.6l3.3-3.3a1 1 0 011.4 0l6.3 6.3V9z"/></svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800">{{ $approvedEvents }}</p>
                        <p class="text-lg text-center text-gray-500">Approved Events</p>
                    </div>
                </div>

                <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                    <div>
                        <div>
                            <p class="flex items-center justify-end text-gray-500 text-md">
                                <span class="font-bold">0%</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path class="heroicon-ui" d="M17 11a1 1 0 010 2H7a1 1 0 010-2h10z"/></svg>
                            </p>
                        </div>
                        <p class="text-3xl font-semibold text-center text-gray-800">{{ $totalEvents }}</p>
                        <p class="text-lg text-center text-gray-500">Total Events</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
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
                <a href="{{route('approve-event',['event_id' => $event->id])}}">Approve</a>
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
    </section>
</x-app-layout>