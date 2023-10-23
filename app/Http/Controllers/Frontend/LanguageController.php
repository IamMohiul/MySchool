<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\Languageclub;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        $Languageclub = Languageclub::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.co-curricular.Language_Club', compact('Languageclub', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
