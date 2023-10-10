<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index() {
        $slider = slider::all();
        return view('frontend.layouts.layout', compact('slider'));
    }
}
