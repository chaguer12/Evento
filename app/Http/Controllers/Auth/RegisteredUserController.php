<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\OrganizerController;
use App\Models\Client;
use App\Models\Organizer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Traits\HasRoles;

class RegisteredUserController extends Controller
{
    use HasRoles;
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
        ]);
        
        
        if($request->role === 'client'){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            
            $user->AssignRole('Client');
            $user->client()->create([
                'user_id' => $user->id,
            ]);
            
            

        }elseif($request->role === 'organizer'){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            
            $user->AssignRole('Organizer');
            $user->organizer()->create([
                'user_id' => $user->id,
            ]);
                        
        }elseif($request->role === 'admin'){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->AssignRole('Admin');
            $user->admin()->create([
                'user_id' => $user->id,
            ]);
        }
        

        event(new Registered($user));

        Auth::login($user);

        if($user->roles->value('name') == 'Organizer'){
            return redirect()->intended(RouteServiceProvider::ORGANIZER);

        }elseif($user->roles->value('name') == 'Admin'){
            return redirect()->intended(RouteServiceProvider::HOME);

        }elseif($user->roles->value('name') == 'Client'){
            return redirect()->intended(RouteServiceProvider::CLIENT);
        }
    }
}
