<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Principlelist;
use App\Models\slider;
use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    public function index(){
        $Principle = Principlelist::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.administrative.Principle_list', compact('Principle', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
