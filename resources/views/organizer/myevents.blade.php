<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dear Organizer,
        </h2>
    </x-slot>
<section>
    <!-- component -->
<!-- This is an example component -->
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
                <div class="text-gray-900">
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
                <button value="{{$event->id}}"  class="edit-btn text-blue-600 hover:text-blue-900">Edit</button>
                <form action="{{ route('event.destroy', $event->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure to delete?')"class="text-red-600 hover:text-red-900 ml-2">Delete</button>
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
   </section>
    
    <div id="modal" class="hidden bg-white min-w-screen h-screen animated fadeIn faster   fixed  left-0 top-0  inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
    <form id="edit-form" action="{{route('event.update',['event' => $event->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="title">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="description">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="date">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="location">
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">                            
                            <label  for="cat_id">Categorie</label>
                            <select name="cat_id" id="category" class="rounded-lg shadow-lg border-[#4338ca]">
                                <option selected disabled >Select a cargeorie</option>
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">                            
                            <label  for="image">Upload file</label>
                            <input class="rounded-lg shadow-lg border-[#4338ca]" name="image" type="file">
                            <p class="mt-1 text-sm text-gray-500 " id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        <input hidden id="targeted_spec" type="text" name="id" value="">
                        <div class="mb-4 flex flex-col w-1/2 mx-auto">
                            <label for="auto accept">Auto accept</label>
                            <input checked type="checkbox"  name="auto accept" id="auto accept" class="rounded-lg shadow-lg border-[#4338ca]" placeholder="auto accept">
                        </div>
          <div class="px-5 py-4 flex justify-end">
            <button type="submit" id="saveChanges" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Save</button>
      </form>
      <a href="/myevents" id="closeModalBtn" class="text-sm py-2 px-3 text-gray-500 hover:text-gray-600 transition duration-150">Close</a>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
    
</x-app-layout>
