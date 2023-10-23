<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Yearlywork;
use Illuminate\Http\Request;

class workingplanController extends Controller
{
    public function index(){
        $Yearlywork = Yearlywork::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.about.Yearly_working_plan', compact('Yearlywork', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
