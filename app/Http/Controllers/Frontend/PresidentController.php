<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Presidentmsg;
use App\Models\slider;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index(){
        $President = Presidentmsg::first();
        $slider = slider::all();
        return view('frontend.administrative.President_Message', compact('President', 'slider'));
    }
}
