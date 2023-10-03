<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionvissionController extends Controller
{
    public function index(){
        $mission = Mission::first();
        return view('frontend.about.Mission_vission', compact('mission'));
    }
    
}
