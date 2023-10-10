<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\slider;
use App\Models\Teaching;
use Illuminate\Http\Request;

class TeachingController extends Controller
{
    public function index(){
        $Teaching = Teaching::first();
        $slider = slider::all();
        return view('frontend.about.Teaching_permission', compact('Teaching', 'slider'));
    }
}
