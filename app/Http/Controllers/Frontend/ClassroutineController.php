<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Clsroutine;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ClassroutineController extends Controller
{
    public function index(){
        $Classroutine = Clsroutine::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.academic.Class_routine', compact('Classroutine', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
