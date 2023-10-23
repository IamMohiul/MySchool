<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Exlist;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ExmemberController extends Controller
{
    public function index(){
        $Exmember = Exlist::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.administrative.Ex_member_list', compact('Exmember', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
