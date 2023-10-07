<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutschool;
use App\Models\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $aboutschool = Aboutschool::first();
        $slider = slider::all();
        return view('frontend.home', compact('aboutschool', 'slider'));
    }
}
