<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DonarslistDataTable;
use App\Http\Controllers\Controller;
use App\Models\Donarslist;
use Illuminate\Http\Request;

class DonarslistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DonarslistDataTable $dataTable)
    {
        return $dataTable->render('admin.administrative.Donarslist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administrative.Donarslist.create');
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

        $Donarslist = new Donarslist();
        $Donarslist->name = $request->name;
        $Donarslist->profession = $request->profession;
        $Donarslist->duration = $request->duration;
        $Donarslist->mobile = $request->mobile;
        $Donarslist->email = $request->email;
        $Donarslist->image = $filePath;
        $Donarslist->save();


        toastr()->success('Member Added successfully!', 'Congrats!');
        return redirect()->route('admin.Donarslist.index');
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
        $Donarslist = Donarslist::findOrFail($id);
        return view('admin.administrative.Donarslist.edit', compact('Donarslist'));
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

        $Donarslist = Donarslist::findOrFail($id);

        $previousFilePath = $Donarslist->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Donarslist);
            $Donarslist->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Donarslist->name = $request->name;
        $Donarslist->profession = $request->profession;
        $Donarslist->duration = $request->duration;
        $Donarslist->mobile = $request->mobile;
        $Donarslist->email = $request->email;
        $Donarslist->save();


        toastr()->success('Donner Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Donarslist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Donarslist = Donarslist::findOrFail($id);
        deleteFileIfExist($Donarslist->image);
        $Donarslist->delete();
    }
}
