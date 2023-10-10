<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\NoticeshowDataTable;
use App\Http\Controllers\Controller;
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
        return view('frontend.pages.notice', compact('slider', 'Notice'));
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

}

