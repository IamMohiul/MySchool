<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\StudentsDataTable;
use App\Http\Controllers\Controller;
use App\Models\classmake;
use App\Models\sectionmake;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StudentsDataTable $dataTable)
    {
        return $dataTable->render('admin.students.Student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Classes= classmake::all();
        return view('admin.students.Student.create', compact('Classes',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' =>['required', 'numeric'],
            'section' =>['max:200'],
            'boy' =>['numeric'],
            'girl' =>['numeric']
        ]);

        $Student = new Students();
        $Student->class_id = $request->class_id;
        $Student->section = $request->section;
        $Student->boy = $request->boy;
        $Student->girl = $request->girl;
        $Student->total = $request->boy + $request->girl;
        $Student->save();


        toastr()->success('Section Created successfully!', 'Congrats!');
        return redirect()->route('admin.Students.index');
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
        $Classes= classmake::all();
        $Students = Students::findOrFail($id);
        return view('admin.students.Student.edit', compact('Classes','Students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'class_id' =>['required', 'numeric'],
            'section' =>['max:200'],
            'boy' =>['numeric'],
            'girl' =>['numeric']
        ]);

        $Student = new Students();
        $Student->class_id = $request->class_id;
        $Student->section = $request->section;
        $Student->boy = $request->boy;
        $Student->girl = $request->girl;
        $Student->total = $request->boy + $request->girl;
        $Student->save();


        toastr()->success('Section Created successfully!', 'Congrats!');
        return redirect()->route('admin.Students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Students = Students::findOrFail($id);
        $Students->delete();
    }
}
