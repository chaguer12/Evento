<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizer = Organizer::where('user_id',Auth::user()->id)->first();
        $reservations = Reservation::where('accepted',0)->where('org_id',$organizer->id)->get();
        return view('organizer.reservations',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user() ){
            $client = Client::where('user_id',Auth::user()->id)->first();
            $tickets = Reservation::where('client_id',$client->id)->where('accepted',1)->get();
            return view('client.mytickets',compact('tickets'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event_id = $request->event;
        $event = Event::find($event_id);
        $client = Client::where('user_id',Auth::user()->id)->first();
        
        if($event->auto_accept == 0){
            $reservation = Reservation::create([
                'event_id' => $event_id,
                'org_id' =>  $event->org_id,
                'client_id' => $client->id,
                'accepted' => 0,
                 
            ]);
            return redirect()->back();
        }elseif($event->auto_accept == 1){
            $reservation = Reservation::create([
                'event_id' => $event_id,
                'org_id' =>  $event->org_id,
                'client_id' => $client->id,
                'accepted' => 1,
                 
            ]);
            return redirect()->back();

        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
    public function accept_(Request $request){        
        $reservation = Reservation::find($request->reservation);
        $reservation->update(['accepted' => 1]);
        return redirect()->back();
    }

    public function refuse_(Request $request){
        $reservation = Reservation::find($request->reservation);
        $reservation->update(['accepted' => 0]);
        return redirect()->back();
    }
}
