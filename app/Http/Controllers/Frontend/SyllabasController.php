<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Syllabas;
use Illuminate\Http\Request;

class SyllabasController extends Controller
{
    public function index(){
        $Syllabas = Syllabas::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.academic.Syllabas', compact('Syllabas', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
