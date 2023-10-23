<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Headintro;
use App\Models\Mpo;
use App\Models\slider;
use Illuminate\Http\Request;

class MpoinfoController extends Controller
{
    public function index(){
        $Mpo = Mpo::first();
        $slider = slider::all();
        $Headintro = Headintro::first();
        return view('frontend.about.Mpo_info', compact('Mpo', 'slider','Headintro','Assheadintro','navigationMenus'));
    }
}
