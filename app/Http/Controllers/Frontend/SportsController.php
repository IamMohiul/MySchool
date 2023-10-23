<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Sports;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index(){
        $Sports = Sports::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.co-curricular.Sports', compact('Sports', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
