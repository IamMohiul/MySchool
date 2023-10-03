<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
   public function index(){
    $History = History::first();
    return view('frontend.about.History', compact('History'));
   }
}
