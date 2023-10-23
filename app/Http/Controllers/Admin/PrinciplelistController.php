<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PrinciplelistDataTable;
use App\Http\Controllers\Controller;
use App\Models\Principlelist;
use Illuminate\Http\Request;

class PrinciplelistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PrinciplelistDataTable $dataTable)
    {
        return $dataTable->render('admin.administrative.Principlelist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administrative.Principlelist.create');
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

        $Principlelist = new Principlelist();
        $Principlelist->name = $request->name;
        $Principlelist->profession = $request->profession;
        $Principlelist->duration = $request->duration;
        $Principlelist->mobile = $request->mobile;
        $Principlelist->email = $request->email;
        $Principlelist->image = $filePath;
        $Principlelist->save();


        toastr()->success('Principle Added successfully!', 'Congrats!');
        return redirect()->route('admin.Principlelist.index');
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
        $Principlelist = Principlelist::findOrFail($id);
        return view('admin.administrative.Principlelist.edit', compact('Principlelist'));
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

        $Principlelist = Principlelist::findOrFail($id);

        $previousFilePath = $Principlelist->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Principlelist);
            $Principlelist->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Principlelist->name = $request->name;
        $Principlelist->profession = $request->profession;
        $Principlelist->duration = $request->duration;
        $Principlelist->mobile = $request->mobile;
        $Principlelist->email = $request->email;
        $Principlelist->save();


        toastr()->success('Principle Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Principlelist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Principlelist = Principlelist::findOrFail($id);
        deleteFileIfExist($Principlelist->image);
        $Principlelist->delete();
    }
}
