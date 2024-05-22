<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
      public function create() {
        return view('auth.login');
      }

      public function store() {
        //validate
        $attributes = request()->validate([
          'email' => ['required'],
          'password' => ['required']
        ]);


        //attempt to login
        if (! Auth::attempt($attributes)) {
          throw ValidationException::withMessages([
            'email' => ['Sorry, those credentials do not match']
          ]);
        };


        //regenerate session token
        request()->session()->regenerate();


        //redirect 
        return redirect('/jobs');
      }

      public function destroy() {
        //logout the user 
        Auth::logout();

        //redirect to homepage
        return redirect('/');
      }
}
