<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\Mission;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class MissionvissionController extends Controller
{
    public function index(){
        $mission = Mission::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.about.Mission_vission', compact('mission', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
    
}
