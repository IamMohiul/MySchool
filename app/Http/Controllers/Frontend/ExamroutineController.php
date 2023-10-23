<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Examroutine;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ExamroutineController extends Controller
{
    public function index(){
        $Examroutine = Examroutine::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.exam.Exam_routine', compact('Examroutine', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
