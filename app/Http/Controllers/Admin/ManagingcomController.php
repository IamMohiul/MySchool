<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ManagingcomDataTable;
use App\Http\Controllers\Controller;
use App\Models\Managingcom;
use Illuminate\Http\Request;

class ManagingcomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ManagingcomDataTable $dataTable)
    {
        return $dataTable->render('admin.administrative.Managingcom.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administrative.Managingcom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'position' => ['required', 'max:200'],
            'mobile' => ['required','regex:/^01[0-9]{9}$/'],
            'email' => ['max:200'],
        ]);

        $filePath = handleUpload('image');

        $Managingcom = new Managingcom();
        $Managingcom->title = $request->title;
        $Managingcom->position = $request->position;
        $Managingcom->image = $filePath;
        $Managingcom->mobile = $request->mobile;
        $Managingcom->email = $request->email;
        $Managingcom->save();


        toastr()->success('Member Added successfully!', 'Congrats!');
        return redirect()->route('admin.Managingcom.index');
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
        $Managingcom = Managingcom::findOrFail($id);
        return view('admin.administrative.Managingcom.edit', compact('Managingcom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'position' => ['max:200'],
        ]);

        $Managingcom = Managingcom::findOrFail($id);

        $previousFilePath = $Managingcom->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Managingcom);
            $Managingcom->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Managingcom->title = $request->title;
        $Managingcom->position = $request->position;
        $Managingcom->mobile = $request->mobile;
        $Managingcom->email = $request->email;
        $Managingcom->save();


        toastr()->success('Member edited successfully!', 'Congrats!');
        return redirect()->route('admin.Managingcom.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Managingcom = Managingcom::findOrFail($id);
        deleteFileIfExist($Managingcom->image);
        $Managingcom->delete();
    }
}
