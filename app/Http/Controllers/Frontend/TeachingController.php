<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Teaching;
use Illuminate\Http\Request;

class TeachingController extends Controller
{
    public function index(){
        $Teaching = Teaching::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.about.Teaching_permission', compact('Teaching', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
