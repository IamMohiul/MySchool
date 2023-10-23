<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Contact;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $slider = slider::all();
        $Contact = Contact::first();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.about.Contact_us', compact('slider', 'Contact','Headintro','Assheadintro','navigationMenus'));
    }
}
