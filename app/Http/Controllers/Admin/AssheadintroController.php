<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assheadintro;
use Illuminate\Http\Request;

class AssheadintroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Assheadintro= Assheadintro::first();
        return view('admin.administrative.Assheadintro.index', compact('Assheadintro'));
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

        // if($request->hasFile('image')){
        //     $Assheadintro = Assheadintro::first();
        //     if($Assheadintro && File::exists(public_path($Assheadintro->image))){
        //         File::delete(public_path($Assheadintro->image));
        //     }

        //     $image = $request->file('image');
        //     $imageName = rand().$image->getClientOriginalName();
        //     $image->move(public_path('/uploads'), $imageName);

        //     $imagePath = "/uploads/".$imageName;
        // }

        // Assheadintro::updateOrCreate(
        //     ['id' => $id],
        //     [
        //         'title' => $request -> title,
        //         'sub_title' => $request -> sub_title,
        //         'image' => isset($imagePath) ? $imagePath : '',  
        //         'content' => $request -> content,

        //     ]
        // );

        // toastr()->success('Update successfully!', 'Congrats!');
        // return redirect()->back();

        $Assheadintro = Assheadintro::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Assheadintro->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Assheadintro);
            $Assheadintro->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Assheadintro -> name = $request -> name;
        $Assheadintro->title = $request->title;
        $Assheadintro->content = $request ->content;
        $Assheadintro->save();

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
