<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PhotogalDataTable;
use App\Http\Controllers\Controller;
use App\Models\Photogal;
use Illuminate\Http\Request;

class PhotogalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PhotogalDataTable $dataTable)
    {
        return $dataTable->render('admin.Gallary.Photogal.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Gallary.Photogal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['max:200'],
            'image' => ['image', 'max:5000', 'required'],
        ]);

        $filePath = handleUpload('image');

        $Photogal = new Photogal();
        $Photogal->title = $request->title;
        $Photogal->image = $filePath;
        $Photogal->save();


        toastr()->success('Photo Added successfully!', 'Congrats!');
        return redirect()->route('admin.Photogal.index');
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
        $Photogal = Photogal::findOrFail($id);
        return view('admin.Gallary.Photogal.edit', compact('Photogal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['max:200'],
            'image' => ['image', 'max:5000'],
        ]);

        $Photogal = Photogal::findOrFail($id);

        $previousFilePath = $Photogal->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Photogal);
            $Photogal->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Photogal->title = $request->title;
        $Photogal->save();


        toastr()->success('Photo Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Photogal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Photogal = Photogal::findOrFail($id);
        deleteFileIfExist($Photogal->image);
        $Photogal->delete();
    }
}
