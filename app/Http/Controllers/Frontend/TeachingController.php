<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Teaching;
use Illuminate\Http\Request;

class TeachingController extends Controller
{
    public function index(){
        $Teaching = Teaching::first();
        return view('frontend.about.Teaching_permission', compact('Teaching'));
    }
}
