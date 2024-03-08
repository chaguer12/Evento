<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('roles')->get();
        $categories = Categorie::all();
        return view('admin.dashboard',compact('users','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function block(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->update(['blocked' =>1]);
        return redirect()->back();
        

    }
    public function unblock(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->update(['blocked' =>0]);
        return redirect()->back();
        

    }
    public function approve(Request $request){
        $id = $request->event_id;
        $event = Event::find($id);
        $event->approved = 1;
        $event->save();
        
        return redirect()->back();
    }
}
