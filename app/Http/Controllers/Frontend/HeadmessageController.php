<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Messagehead;
use Illuminate\Http\Request;

class HeadmessageController extends Controller
{
    public function index(){
        $Headmsg = Messagehead::first();
        return view('frontend.administrative.Message_head', compact('Headmsg'));
    }
}
