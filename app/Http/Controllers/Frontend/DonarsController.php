<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Donarslist;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class DonarsController extends Controller
{
    public function index(){
        $Donars = Donarslist::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.administrative.Donars_list', compact('Donars', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
