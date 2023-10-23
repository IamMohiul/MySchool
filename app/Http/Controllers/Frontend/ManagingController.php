<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\Managingcom;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ManagingController extends Controller
{
    public function index(){
        $Managing = Managingcom::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.about.Managing_comittee', compact('Managing', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
