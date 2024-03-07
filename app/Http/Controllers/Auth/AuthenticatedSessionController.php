<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Spatie\Permission\Traits\HasRoles;


class AuthenticatedSessionController extends Controller
{
    use HasRoles;
    
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $user = Auth::user();
        if($user->roles->value('name') == 'Organizer'){
            return redirect()->intended(RouteServiceProvider::ORGANIZER);

        }elseif($user->roles->value('name') == 'Admin'){
            return redirect()->intended(RouteServiceProvider::HOME);

        }elseif($user->roles->value('name') == 'Client'){
            return redirect()->intended(RouteServiceProvider::CLIENT);
        }
        
        
     
            
        
      
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
