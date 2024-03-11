@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp
@unless(Auth::user()->hasRole('Organizer'))
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
@endunless
@role('Organizer')
    <a href="/add-event"{{ $attributes->merge(['class' => $classes]) }}>
        Add an event

    </a>
@endrole
@role('Organizer')
    <a href="/myevents"{{ $attributes->merge(['class' => $classes]) }}>
        My events

    </a>
@endrole
@role('Organizer')
    <a href="{{route('reservation.index')}}"{{ $attributes->merge(['class' => $classes]) }}>
       Reservations

    </a>
@endrole
@role('Admin')
    <a href="/events"{{ $attributes->merge(['class' => $classes]) }}>
        Events

    </a>
@endrole

