<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class CategorieController extends Controller
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
    public function create(Request $request)
    {
        
        $cat_id = $request->cat_id;
        $events = Event::where('cat_id',$cat_id)->where('approved',1)->get();
        
        if($events->count() == 0){
            $message = 'No events has been, please try later';
            return view('client.events',compact('events','message'));
        }else{
            $message = '';
            return view('client.events',compact('events','message'));
        }
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieRequest $Request)
    {
        
        $category = Categorie::create($Request->validated());
        return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategorieRequest $Request,Categorie $category)
    {
        
        if(!empty($Request->cat_name)){
            Categorie::where('id',$Request->id)->update(['cat_name' => $Request->cat_name]);
            return redirect()->back();
        }else{
            
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(Categorie::destroy($id)){
            return redirect()->back();
        }
    }
}
