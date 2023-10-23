<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Photogal;
use App\Models\slider;
use Illuminate\Http\Request;

class PhotogallaryController extends Controller
{
    public function index(){
        $slider = slider::all();
        $Photogal = Photogal::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.gallery.Photo_gallery', compact('slider', 'Photogal','Headintro','Assheadintro','navigationMenus'));
    }
}
