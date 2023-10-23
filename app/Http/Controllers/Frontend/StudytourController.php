<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Studytour;
use Illuminate\Http\Request;

class StudytourController extends Controller
{
    public function index(){
        $Studytour = Studytour::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.co-curricular.Study_Tour', compact('Studytour', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
