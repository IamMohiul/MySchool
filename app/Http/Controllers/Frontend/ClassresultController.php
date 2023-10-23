<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Classresult;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ClassresultController extends Controller
{
    public function index(){
        $Classresult = Classresult::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.result.Class_Result', compact('Classresult', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
