<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public function returnwelcome()
    {
        return view('welcome');
    }
}
