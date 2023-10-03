<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Infrastructure;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    public function index(){
        $Infrastructure = Infrastructure::first();
        return view('frontend.about.Infrastructure', compact('Infrastructure'));
    }
}
