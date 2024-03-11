<x-app-layout>
<section>
   <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <div class=" mx-auto bg-white  rounded shadow">
                        <h2 class="text-xl font-bold my-4">Event Table</h2>
                        <table class="w-full border-collapse">
    <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2 text-left">Event</th>
            <th class="border px-4 py-2 text-left">User name</th>
            <th class="border px-4 py-2 text-left">User email</th>
            <th class="border px-4 py-2 text-left">location</th>
            <th class="border px-4 py-2 text-left">Approved?</th>
            <th class="border px-4 py-2 text-left">Actions</th> <!-- New column for actions -->
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $reservation)
        
        <tr class="hover:bg-gray-100">
            <td class="border px-4 py-2">
            {{$reservation->event->title}}
            </td>
            <td class="border px-4 py-2">{{$reservation->client->user->name}}</td>
            <td class="border px-4 py-2">{{$reservation->client->user->email}}</td>
            <td class="border px-4 py-2">{{$reservation->location}}</td>
            <td class="border px-4 py-2">
                @if($reservation->accepted == 1)
                <span class="text-green-600">Yes</span>
                @else
                <span class="text-red-600">No</span>
                @endif
            </td>
            <td class="border px-4 py-2">
                <a href="{{route('accept',['reservation' => $reservation->id])}}" value="{{$reservation->id}}"  class="text-blue-600 hover:text-blue-900">Accept</a>
                
                   
                <a value="{{$reservation->id}}" href="{{route('refuse')}}"  onclick="return confirm('Are you sure to refuse?')"class="text-red-600 hover:text-red-900 ml-2">Refuse</a>
                
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