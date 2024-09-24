<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usersAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        $employerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', File::types(['jpg', 'png', 'webp'])]
        ]);

        $user = User::create($usersAttributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            "name" => $employerAttributes["employer"],
            "logo" => $logoPath
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
