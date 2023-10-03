<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Citizencharter;
use Illuminate\Http\Request;
use File;

class CitizencharterConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citizencharter = Citizencharter::first();
        return view('admin.about.Citizencharter.index', compact('citizencharter') ) ;
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
            'image' => ['max:3000', 'image'],
            'content' => ['max:99999'],
        ]);

        if($request->hasFile('image')){
            $citizencharter = Citizencharter::first();
            if($citizencharter && File::exists(public_path($citizencharter->image))){
                File::delete(public_path($citizencharter->image));
            }

            $image = $request->file('image');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/".$imageName;
        }

        Citizencharter::updateOrCreate(
            ['id' => $id],
            [
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
