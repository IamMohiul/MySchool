<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ChairmanlistDataTable;
use App\Http\Controllers\Controller;
use App\Models\Chairmanlist;
use Illuminate\Http\Request;

class ChairmanlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ChairmanlistDataTable $dataTable)
    {
        return $dataTable->render('admin.administrative.Chairmanlist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administrative.Chairmanlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'profession' => ['max:200'],
            'duration' => ['required','max:200'],
            'mobile' => ['required','regex:/^01[0-9]{9}$/'],
            'email' => ['max:200'],
            'image' => ['image', 'max:5000', 'required'],
        ]);

        $filePath = handleUpload('image');

        $Chairmanlist = new Chairmanlist();
        $Chairmanlist->name = $request->name;
        $Chairmanlist->profession = $request->profession;
        $Chairmanlist->duration = $request->duration;
        $Chairmanlist->mobile = $request->mobile;
        $Chairmanlist->email = $request->email;
        $Chairmanlist->image = $filePath;
        $Chairmanlist->save();


        toastr()->success('Member Added successfully!', 'Congrats!');
        return redirect()->route('admin.Chairmanlist.index');
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
        $Chairmanlist = Chairmanlist::findOrFail($id);
        return view('admin.administrative.Chairmanlist.edit', compact('Chairmanlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'profession' => ['max:200'],
            'duration' => ['required','max:200'],
            'mobile' => ['required','regex:/^01[0-9]{9}$/'],
            'email' => ['max:200'],
            'image' => ['image', 'max:5000'],
        ]);

        $Chairmanlist = Chairmanlist::findOrFail($id);

        $previousFilePath = $Chairmanlist->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Chairmanlist);
            $Chairmanlist->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Chairmanlist->name = $request->name;
        $Chairmanlist->profession = $request->profession;
        $Chairmanlist->duration = $request->duration;
        $Chairmanlist->mobile = $request->mobile;
        $Chairmanlist->email = $request->email;
        $Chairmanlist->save();


        toastr()->success('Member Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Chairmanlist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Chairmanlist = Chairmanlist::findOrFail($id);
        deleteFileIfExist($Chairmanlist->image);
        $Chairmanlist->delete();
    }
}
