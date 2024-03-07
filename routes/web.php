<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ProfileController;
use App\Models\Categorie;
use App\Models\Event;
use App\Models\User;
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
    return view('organizer.dashboard');
})->name('add-event');
Route::get('block-user', [AdminController::class, 'block'])->name('block-user');
Route::get('unblock-user', [AdminController::class, 'unblock'])->name('unblock-user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
