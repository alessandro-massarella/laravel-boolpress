<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index() {
        
    }


    public function guest() {
        $user = 'utente';
        return view('hello', compact('user'));

    }

    public function logged() {
        
        $user = Auth::user();
        $user = $user->name;
        return view('hello', compact('user'));

    }
}
