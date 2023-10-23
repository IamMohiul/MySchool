<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class classmenuController extends Controller
{
    public function index(){
        $navigationMenus = NavigationMenu::all();
        $slider = slider::all();
        $Assheadintro = Assheadintro::first();
        return view('frontend.layouts.navbar', compact('navigationMenus', 'slider','Assheadintro',));
    }
}
