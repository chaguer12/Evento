<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ProfileController;
use App\Models\Categorie;
use App\Models\Event;
use App\Models\Organizer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('event',EventController::class);
Route::resource('categories', CategorieController::class);
Route::resource('admin',AdminController::class);
Route::resource('client',ClientController::class);
route::resource('organizer',OrganizerController::class);
Route::get('/dashboard', function () {
    
        $users = User::with('roles')->get();
        $categories = Categorie::all();
        return view('admin.dashboard',compact('users','categories'));
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/category', function () {
    
        
        $categories = Categorie::all();
        return view('client.categorie',compact('categories'));
})->name('category');
Route::get('/add-event', function () {
    $categories = Categorie::all();
    return view('organizer.dashboard',compact('categories'));
})->name('add-event');
Route::get('block-user', [AdminController::class, 'block'])->name('block-user');
Route::get('unblock-user', [AdminController::class, 'unblock'])->name('unblock-user');
Route::get('approve/{event_id}', [AdminController::class, 'approve'])->name('approve-event');
Route::get('about',function(){
    return view('about');
});
Route::get('myevents',function(){
    $organizer = Organizer::where('user_id',Auth::user()->id)->first();
    $events = Event::where('org_id',$organizer->id)->get();
    $categories = Categorie::all();
    

   
    $totalEvents = Event::where('org_id', $organizer->id)->count();

    
    $approvedEvents = Event::where('org_id', $organizer->id)
                            ->where('approved', 1)
                            ->count();

   
    $notApprovedEvents = Event::where('org_id', $organizer->id)
                                ->where('approved', 0)
                                ->count();
    return view('organizer.myevents',compact('events','categories','notApprovedEvents','approvedEvents','totalEvents'));
});
Route::get('events',function(){
    $events = Event::where('approved',0)->get();

    $totalEvents = Event::count();

    
    $approvedEvents = Event::where('approved', 1)
                            ->count();

   
    $notApprovedEvents = Event::where('approved', 0)
                                ->count();
    
    return view('admin.events',compact('events','totalEvents','approvedEvents','notApprovedEvents'));

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
