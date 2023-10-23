<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Cultural;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function index(){
        $Cultural = Cultural::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.co-curricular.Cultural_Activities', compact('Cultural', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
