<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Scouts;
use App\Models\slider;
use Illuminate\Http\Request;

class ScoutsController extends Controller
{
    public function index(){
        $Scouts = Scouts::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.co-curricular.Scouts', compact('Scouts', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
