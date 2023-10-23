<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Chairmanlist;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ChairmansController extends Controller
{
    public function index(){
        $Chairman = Chairmanlist::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.about.Chairman_list', compact('Chairman', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
