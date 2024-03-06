<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registrationForm()
    {
        return view('register');
    }

    public function showGreetings(Request $request)
    {
        $firstName = $request->input('first_name', 'John');
        $lastName = $request->input('last_name', 'Doe');
        $gender = $request->input('gender', 'male');
        $nationality = $request->input('nationality', 'american');
        $languages = $request->input('languages', ['english']);
        $bio = $request->input('bio', null);

        return view('greeting', [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'gender' => $gender,
            'nationality' => $nationality,
            'languages' => $languages,
            'bio' => $bio,
        ]);
    }
}
