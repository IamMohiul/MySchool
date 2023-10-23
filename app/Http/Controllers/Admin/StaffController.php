<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\StaffDataTable;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StaffDataTable $dataTable)
    {
        return $dataTable->render('admin.teachers.stuffs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.stuffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'profession' => ['max:200'],
            'joindate' => ['date'],
            'mobile' => ['required','regex:/^01[0-9]{9}$/'],
            'email' => ['max:200'],
            'image' => ['image', 'max:5000', 'required'],
        ]);

        $filePath = handleUpload('image');

        $Staff = new Staff();
        $Staff->name = $request->name;
        $Staff->profession = $request->profession;
        $Staff->joindate = $request->joindate;
        $Staff->mobile = $request->mobile;
        $Staff->email = $request->email;
        $Staff->image = $filePath;
        $Staff->save();


        toastr()->success('Staff Added successfully!', 'Congrats!');
        return redirect()->route('admin.Staff.index');
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
        $Staff = Staff::findOrFail($id);
        return view('admin.teachers.stuffs.edit', compact('Staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'profession' => ['max:200'],
            'joindate' => ['date'],
            'mobile' => ['required','regex:/^01[0-9]{9}$/'],
            'email' => ['max:200'],
            'image' => ['image', 'max:5000'],
        ]);

        $Staff = Staff::findOrFail($id);

        $previousFilePath = $Staff->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Staff);
            $Staff->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Staff->name = $request->name;
        $Staff->profession = $request->profession;
        $Staff->joindate = $request->joindate;
        $Staff->mobile = $request->mobile;
        $Staff->email = $request->email;
        $Staff->save();


        toastr()->success('Staff Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Staff.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Staff = Staff::findOrFail($id);
        deleteFileIfExist($Staff->image);
        $Staff->delete();
    }
}
