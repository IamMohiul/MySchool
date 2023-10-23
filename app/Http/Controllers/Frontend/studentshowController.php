<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\classmake;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\slider;
use App\Models\Students;
use Illuminate\Http\Request;

class studentshowController extends Controller
{
    public function index(){
        $navigationMenus = NavigationMenu::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        return view('frontend.students.students', compact('navigationMenus', 'slider', 'Headintro','Assheadintro'));
    }

    public function showStudents($categoryId){
        $classmake = classmake::findOrFail($categoryId); // Fetch the category by its ID
        $students = Students::where('class_id', $categoryId)->get(); // Get all notices for the specific category
        $navigationMenus = NavigationMenu::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        return view('frontend.students.students', compact('classmake', 'students','navigationMenus', 'slider', 'Headintro','Assheadintro'));
    }
}
