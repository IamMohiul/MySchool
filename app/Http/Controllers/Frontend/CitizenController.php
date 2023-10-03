<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Citizencharter;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index(){
        $Citizencharter = Citizencharter::first();
        return view('frontend.about.Citizen_charter', compact('Citizencharter'));
    }
}
