<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Cabinet;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class StudentscabinetController extends Controller
{
    public function index(){
        $Cabinet = Cabinet::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.co-curricular.Students_Cabinet', compact('Cabinet', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
