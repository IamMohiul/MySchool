<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\Messagehead;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class HeadmessageController extends Controller
{
    public function index(){
        $Headmsg = Messagehead::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.administrative.Message_head', compact('Headmsg', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
