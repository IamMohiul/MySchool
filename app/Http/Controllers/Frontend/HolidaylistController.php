<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\Holiday;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class HolidaylistController extends Controller
{
    public function index(){
        $Holiday = Holiday::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.academic.Holiday_list', compact('Holiday', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
