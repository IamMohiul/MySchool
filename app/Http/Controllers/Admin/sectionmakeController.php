<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SectionmakeDataTable;
use App\Http\Controllers\Controller;
use App\Models\classmake;
use App\Models\sectionmake;
use Illuminate\Http\Request;

class sectionmakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SectionmakeDataTable $dataTable)
    {
        return $dataTable->render('admin.students.Sectionmake.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Classes= classmake::all();
        return view('admin.students.Sectionmake.create', compact('Classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'section' => ['required', 'max:200'],
            'class_id' =>['required', 'numeric'],
        ]);


        $Sectionmake = new sectionmake();
        $Sectionmake->section = $request->section;
        $Sectionmake->class_id = $request->class_id;
        $Sectionmake->save();


        toastr()->success('Section Created successfully!', 'Congrats!');
        return redirect()->route('admin.Sectionmake.index');
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
        $Sectionmake = sectionmake::findOrFail($id);
        return view('admin.students.Sectionmake.edit', compact('Classes','Sectionmake'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'section' => ['required', 'max:200'],
            'class_id' =>['required', 'numeric']
        ]);
        
        $Sectionmake = sectionmake::findOrFail($id);

        $Sectionmake->section = $request->section;
        $Sectionmake->class_id = $request->class_id;
        $Sectionmake->save();


        toastr()->success('Section Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Sectionmake.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Sectionmake = sectionmake::findOrFail($id);
        $Sectionmake->delete();
    }
}
