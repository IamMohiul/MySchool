<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Fees;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function index(){
        $Fees = Fees::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.academic.Fees', compact('Fees', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
