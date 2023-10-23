<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\Infrastructure;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    public function index(){
        $Infrastructure = Infrastructure::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.about.Infrastructure', compact('Infrastructure', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
