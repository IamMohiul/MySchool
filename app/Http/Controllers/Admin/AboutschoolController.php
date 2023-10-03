<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutschool;
use Illuminate\Http\Request;
use File;

class AboutschoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutschool = Aboutschool::first();
        return view('admin.about.Aboutschool.index', compact('aboutschool') ) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
            'title' => ['max:200'],
            'sub_title' =>[],
            'image' => ['max:3000', 'image'],
            'content' => ['required'],
        ]);

        if($request->hasFile('image')){
            $aboutachool = Aboutschool::first();
            if($aboutachool && File::exists(public_path($aboutachool->image))){
                File::delete(public_path($aboutachool->image));
            }

            $image = $request->file('image');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/".$imageName;
        }

        Aboutschool::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request -> title,
                'sub_title' => $request -> sub_title,
                'image' => isset($imagePath) ? $imagePath : '',  
                'content' => $request -> content,

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
