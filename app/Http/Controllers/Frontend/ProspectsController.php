<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Prospects;
use App\Models\slider;
use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    public function index(){
        $Prospects = Prospects::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.admission.Prospects', compact('Prospects', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
