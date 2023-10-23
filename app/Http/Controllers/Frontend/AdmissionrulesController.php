<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admrules;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class AdmissionrulesController extends Controller
{
    public function index(){
        $Admrules = Admrules::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.admission.Admission_Rules', compact('Admrules', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
