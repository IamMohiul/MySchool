<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutschool;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Notice;
use App\Models\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $aboutschool = Aboutschool::first();
        $slider = slider::all();
        $Notice = Notice::latest()->take(5)->get();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.home', compact(
            'aboutschool',
            'slider',
            'Notice',
            'Headintro',
            'Assheadintro',
            'navigationMenus',
        ));
    }
}
