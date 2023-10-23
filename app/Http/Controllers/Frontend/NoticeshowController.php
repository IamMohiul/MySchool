<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\NoticeshowDataTable;
use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use App\Models\Headintro;
use App\Models\NavigationMenu;
use App\Models\Ncatagory;
use App\Models\Notice;
use App\Models\slider;
use Illuminate\Http\Request;

class NoticeshowController extends Controller
{
    // public function index(NoticeshowDataTable $dataTable){
    //     $slider = slider::all();
    //     return $dataTable->render('frontend.pages.notice', compact('slider'));
    // }
    public function index()
    {
        $Notice = Notice::all();
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.pages.notice', compact('slider', 'Notice','Headintro','Assheadintro','navigationMenus'));
    }


    public function show(string $id)
    {
        $data = Notice::all();

        return view('frontend.pages.notice', compact('data'));
    }

    public function download(Request $request, $file)
    {
        $Notice = Notice::all();
        return response()->download(public_path($Notice->file));
    }

    public function showNoticesByCategory($categoryId)
    {
        $category = Ncatagory::findOrFail($categoryId); // Fetch the category by its ID
        $Notice = Notice::where('category_id', $categoryId)->get(); // Get all notices for the specific category
        $slider = slider::all();
        $Headintro = Headintro::first();
        $Assheadintro = Assheadintro::first();
        $navigationMenus = NavigationMenu::all();
        return view('frontend.pages.notice', compact('category', 'Notice', 'slider','Headintro','Assheadintro','navigationMenus'));
    }


}

