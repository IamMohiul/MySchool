<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admsyllabus;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class AdmissionsyllabusController extends Controller
{
    public function index(){
        $Admsyllabus = Admsyllabus::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.admission.Admission_Syllabus', compact('Admsyllabus', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
