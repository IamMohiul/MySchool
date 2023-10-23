<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Headintro;
use Illuminate\Http\Request;
use FIle;

class HeadintroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Headintro= Headintro::first();
        return view('admin.about.Headintro.index', compact('Headintro'));
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
            'name' => ['required', 'max:200'],
            'title' =>['required','max:400'],
            'image' => ['max:3000', 'image'],
            'content' => [''],
        ]);

        $Headintro = Headintro::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Headintro->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Headintro);
            $Headintro->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Headintro -> name = $request -> name;
        $Headintro->title = $request->title;
        $Headintro->content = $request ->content;
        $Headintro->save();

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
