<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExlistDataTable;
use App\Http\Controllers\Controller;
use App\Models\Exlist;
use Illuminate\Http\Request;

class ExlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ExlistDataTable $dataTable)
    {
        return $dataTable->render('admin.administrative.Exlist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administrative.Exlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'profession' => ['max:200'],
            'mobile' => ['required','regex:/^01[0-9]{9}$/'],
            'email' => ['max:200'],
            'image' => ['image', 'max:5000', 'required'],
        ]);

        $filePath = handleUpload('image');

        $Exlist = new Exlist();
        $Exlist->name = $request->name;
        $Exlist->profession = $request->profession;
        $Exlist->mobile = $request->mobile;
        $Exlist->email = $request->email;
        $Exlist->image = $filePath;
        $Exlist->save();


        toastr()->success('Principle Added successfully!', 'Congrats!');
        return redirect()->route('admin.Exlist.index');
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
        $Exlist = Exlist::findOrFail($id);
        return view('admin.administrative.Exlist.edit', compact('Exlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'profession' => ['max:200'],
            'mobile' => ['required','regex:/^01[0-9]{9}$/'],
            'email' => ['max:200'],
            'image' => ['image', 'max:5000'],
        ]);

        $Exlist = Exlist::findOrFail($id);

        $previousFilePath = $Exlist->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Exlist);
            $Exlist->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Exlist->name = $request->name;
        $Exlist->profession = $request->profession;
        $Exlist->mobile = $request->mobile;
        $Exlist->email = $request->email;
        $Exlist->save();


        toastr()->success('Principle Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Exlist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Exlist = Exlist::findOrFail($id);
        deleteFileIfExist($Exlist->image);
        $Exlist->delete();
    }
}
