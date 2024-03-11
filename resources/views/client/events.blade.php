<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body class="bg-[#f3f4f6]">


<section class="py-16 flex justify-center">
    <div class="w-3/4 flex justify-between">
        <div class="w-3/4">
            @if($message)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 flex">
                            <marquee class="font-bold" direction="left">{{ $message }}</marquee>
                            <marquee class="font-bold" direction="left">{{ $message }}</marquee>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="py-12">
                
                @foreach($events as $event)
                    <div class="max-w-xl  p-4 sm:px-6 lg:px-8">
                        <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-4 text-gray-900 h-full">
                                <div class="h-96">
                                    <img class="h-1/3 w-full shadow-lg rounded-md" src="{{asset('storage/'.$event->image->path)}}" alt="profile image">
                                    <h1 class="font-bold mt-4">{{$event->title}}</h1>
                                    <p class="mt-4">{{substr($event->description,0,150)}}...</p>
                                    <p class="text-gray-500 mt-4">{{$event->location}}</p>
                                    
                                    <div class="flex justify-between mt-2 ">
                                        <div><p class="text-sm ">Date: <span class="text-gray-500">{{$event->date}}</span></p></div>
                                        <div><a href="{{route('event.show',['event' => $event->id])}}" class="bg-[#4338ca] text-white text-center p-2 rounded-lg hover:shadow-lg">Check event</a></div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                
            </div>
        </div>
        
        <div class="w-1/2">
            <!-- Section for favorite doctors -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Search Events</h2>
                <!-- Add your favorite doctors list here -->
                
<form action="" method="get" class="max-w-md mx-auto">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by title" required />
        <a href="" type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</a>
    </div>
</form>

                


            </div>
        </div>
    </div>
</section>
@include('includes/footer')


</body>