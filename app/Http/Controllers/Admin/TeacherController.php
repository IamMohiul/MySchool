<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TeacherDataTable;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TeacherDataTable $dataTable)
    {
        return $dataTable->render('admin.teachers.teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.teacher.create');
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

        $Teacher = new Teacher();
        $Teacher->name = $request->name;
        $Teacher->profession = $request->profession;
        $Teacher->joindate = $request->joindate;
        $Teacher->mobile = $request->mobile;
        $Teacher->email = $request->email;
        $Teacher->image = $filePath;
        $Teacher->save();


        toastr()->success('Teacher Added successfully!', 'Congrats!');
        return redirect()->route('admin.Teacher.index');
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
        $Teacher = Teacher::findOrFail($id);
        return view('admin.teachers.teacher.edit', compact('Teacher'));
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

        $Teacher = Teacher::findOrFail($id);

        $previousFilePath = $Teacher->image; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('image')) {
            $filePath = handleUpload('image', $Teacher);
            $Teacher->image = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }

        $Teacher->name = $request->name;
        $Teacher->profession = $request->profession;
        $Teacher->joindate = $request->joindate;
        $Teacher->mobile = $request->mobile;
        $Teacher->email = $request->email;
        $Teacher->save();


        toastr()->success('Principle Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Teacher = Teacher::findOrFail($id);
        deleteFileIfExist($Teacher->image);
        $Teacher->delete();
    }
}
