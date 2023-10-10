<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mpo;
use App\Models\slider;
use Illuminate\Http\Request;

class MpoinfoController extends Controller
{
    public function index(){
        $Mpo = Mpo::first();
        $slider = slider::all();
        return view('frontend.about.Mpo_info', compact('Mpo', 'slider'));
    }
}
