<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Rulesreg;
use App\Models\slider;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function index(){
        $Rulesreg = Rulesreg::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.academic.Rules_regulation', compact('Rulesreg', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
