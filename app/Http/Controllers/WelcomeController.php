<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class WelcomeController extends Controller
{
    
    public function returnwelcome()
    {
      return view('welcome')->with('menus', Menu::all()->sortBy('menu_name'));
    }
}
