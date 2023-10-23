<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Uniform;
use Illuminate\Http\Request;

class UniformController extends Controller
{
    public function index(){
        $Uniform = Uniform::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.academic.Uniform', compact('Uniform', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}