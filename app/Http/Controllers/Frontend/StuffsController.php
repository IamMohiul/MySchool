<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Staff;
use Illuminate\Http\Request;

class StuffsController extends Controller
{
    public function index(){
        $Stuffs = Staff::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.teacher.Staff_info', compact('Stuffs', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
