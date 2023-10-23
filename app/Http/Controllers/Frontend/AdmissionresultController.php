<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admresult;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class AdmissionresultController extends Controller
{
    public function index(){
        $Admresult = Admresult::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.admission.Admission_Result', compact('Admresult', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
