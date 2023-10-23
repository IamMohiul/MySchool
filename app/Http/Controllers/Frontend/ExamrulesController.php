<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Examrules;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ExamrulesController extends Controller
{
    public function index(){
        $Examrules = Examrules::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.exam.Exam_rules', compact('Examrules', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
