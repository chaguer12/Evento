<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\User;
use App\trait\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    use ImageUpload;
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
    public function store(EventRequest $request)
    {
        
        $accept = $request->auto_accept;
        $organizer = Organizer::where('user_id', Auth::user()->id)->first();
        if($accept == 'on'){
            $accept = 1;

        }else{
            $accept = 0;
        }
        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'auto_accept' => $accept,
            'cat_id' => $request->cat_id,
            'org_id' => $organizer->id,

        ]);
        $this->storeImg($event,$request->file("image"));
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
