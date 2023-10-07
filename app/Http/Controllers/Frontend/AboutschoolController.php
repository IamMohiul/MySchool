<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutschool;
use App\Models\slider;
use Illuminate\Http\Request;

class AboutschoolController extends Controller
{
    public function index(){
        $aboutschool = Aboutschool::first();
        $slider = slider::all();
        return view('frontend.about.About_school', compact('aboutschool', 'slider'));
    }
}
