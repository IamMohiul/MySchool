<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\History;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
   public function index(){
    $History = History::first();
    $slider = slider::all();
    $Headintro = Headintro::first();
    $Assheadintro = Assheadintro::first();
    $navigationMenus = NavigationMenu::all();
    return view('frontend.about.History', compact('History', 'slider','Headintro','Assheadintro','navigationMenus'));
   }
}
