<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\sliderDataTable;
use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use File;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(sliderDataTable $dataTable)
    {
        $slider = slider::first();
        return $dataTable->render('admin.header.slider.index', compact('slider') ) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.header.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:3000', 'image'],
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/".$imageName;
        }

        slider::Create(
            [
                'image' => isset($imagePath) ? $imagePath : '',
            ]
        );

        // $create = new slider();
        // $create->image= $request->image;
        // $create ->save();

        toastr()->success('Upload successfully!', 'Congrats!');
        return redirect()->route('admin.slider.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image1' => ['image'],
            'image2' => ['image'],
            'image3' => ['image'],
        ]);

        if($request->hasFile('image1')){
            $slider = slider::first();
            if($slider && File::exists(public_path($slider->image))){
                File::delete(public_path($slider->image));
            }

            $image = $request->file('image1');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/".$imageName;
        }

        if($request->hasFile('image2')){
            $slider = slider::first();
            if($slider && File::exists(public_path($slider->image))){
                File::delete(public_path($slider->image));
            }

            $image = $request->file('image2');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/".$imageName;
        }

        if($request->hasFile('image3')){
            $slider = slider::first();
            if($slider && File::exists(public_path($slider->image))){
                File::delete(public_path($slider->image));
            }

            $image = $request->file('image3');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/".$imageName;
        }

        slider::updateOrCreate(
            ['id' => $id],
            [
                'image1' => isset($imagePath) ? $imagePath : '',
                'image2' => isset($imagePath) ? $imagePath : '',
                'image3' => isset($imagePath) ? $imagePath : '',

            ]
        );

        toastr()->success('Update successfully!', 'Congrats!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
