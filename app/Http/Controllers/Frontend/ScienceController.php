<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Sciencefair;
use App\Models\slider;
use Illuminate\Http\Request;

class ScienceController extends Controller
{
    public function index(){
        $Sciencefair = Sciencefair::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.co-curricular.Science_Fair', compact('Sciencefair', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
