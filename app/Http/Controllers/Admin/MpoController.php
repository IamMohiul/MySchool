<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mpo;
use Illuminate\Http\Request;
use File;

class MpoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Mpo = Mpo::first();
        return view('admin.about.Mpo.index', compact('Mpo'));
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
            $Mpo = Mpo::first();
            if($Mpo && File::exists(public_path($Mpo->image))){
                File::delete(public_path($Mpo->image));
            }

            $image = $request->file('image');
            $imageName = rand().$image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/".$imageName;
        }

        Mpo::updateOrCreate(
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
