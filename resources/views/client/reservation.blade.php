<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body class="bg-[#f3f4f6]">

<section class="py-16">
    <h2 class="mb-5 font-sans text-3xl text-center mt-8 font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">Book your event easily</h2>
<div class="max-w-4xl mx-auto p-4 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 flex items-center">
            <div class="w-1/2 mr-6">
                <img class="w-full shadow-lg rounded-md" src="{{ asset('storage/'.$event->image->path) }}" alt="profile image">
            </div>
            <div class="w-1/2">
                <h1 class="font-bold">{{ $event->title }}</h1>
                <p class="mt-2">{{ $event->description }}</p>
                <p class="text-gray-500 mt-2">Location: <span>{{ $event->location }}</span></p>
                
                <div class="flex justify-between mt-4">
                    <div>
                        <p class="text-sm">Date: <span class="text-gray-500">{{ $event->date }}</span></p>
                    </div>
                    <div>
                        <button type="submit" class="bg-[#4338ca] text-white px-4 py-2 rounded-md hover:bg-indigo-700">Book now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</section>

@include('includes.footer')
</body>