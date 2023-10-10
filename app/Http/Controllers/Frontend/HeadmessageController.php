<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Messagehead;
use App\Models\slider;
use Illuminate\Http\Request;

class HeadmessageController extends Controller
{
    public function index(){
        $Headmsg = Messagehead::first();
        $slider = slider::all();
        return view('frontend.administrative.Message_head', compact('Headmsg', 'slider'));
    }
}
