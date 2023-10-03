<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Presidentmsg;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index(){
        $President = Presidentmsg::first();
        return view('frontend.administrative.President_Message', compact('President'));
    }
}
