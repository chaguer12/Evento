<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body class="bg-[#f3f4f6]">
    @foreach($tickets as $ticket)
<section class="py-16 overflow-hidden   rounded-lg shadow-2xl md:grid md:grid-cols-3">
 
  <img
    alt="Event image"
    src="{{asset('storage/'.$ticket->event->image->path)}}"
    class="h-32 w-full object-cover md:h-full"
  />

  <div class="p-4 text-center sm:p-6 md:col-span-2 lg:p-8">
    <p class="text-sm font-semibold text-[#4338ca] uppercase tracking-widest">Evento</p>

    <h2 class="mt-6 font-black uppercase">
      <span class="text-4xl text-[#4338ca] font-black sm:text-5xl lg:text-6xl"> {{$ticket->event->title}}</span>

      <span class="mt-2 block text-[#4338ca] text-sm">{{$ticket->event->location}}</span>
    </h2>

    <a
      class="mt-8 inline-block w-full bg-[#4338ca] py-4 text-sm font-bold uppercase tracking-widest text-white"
      href="#"
    >
    {{$ticket->event->date}}
    </a>

    <p class="mt-8 text-xs font-medium uppercase text-gray-400">
    Client :{{$ticket->client->user()->value('name')}}
    </p>

</div>
</section>
@endforeach
@include('includes.footer')
</body>