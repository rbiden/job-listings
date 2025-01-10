<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        session()->flash('alert', [
            'type' => 'info',
            'message' => 'You have been logged in successfully.'
        ]);

        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $creds = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($creds)) {
            throw ValidationException::withMessages([
                'password' => ['The provided credentials do not match our records.'],
            ]);
        }

        return redirect()->intended(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        session()->flash('alert', [
            'type' => 'info',
            'message' => 'You have been logged out successfully.'
        ]);

        return redirect()->route('home');
    }
}
