<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Event;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event_id = $request->event;
        $event = Event::find($event_id);
        $client_id = Client::where('user_id',Auth::user()->id)->first();
        
        if($event->auto_accept == 0){
            $reservation = Reservation::create([
                'event_id' => $event_id,
                'org_id' =>  $event->org_id,
                'client_id' => $client_id->id,
                'accepted' => 0,
                 
            ]);
            return redirect()->back();
        }elseif($event->auto_accept == 1){
            $reservation = Reservation::create([
                'event_id' => $event_id,
                'org_id' =>  $event->org_id,
                'client_id' => $client_id->id,
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
}
