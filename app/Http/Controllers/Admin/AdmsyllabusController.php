<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdmsyllabusDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admsyllabus;
use Illuminate\Http\Request;

class AdmsyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AdmsyllabusDataTable $dataTable)
    {
        return $dataTable->render('admin.Admission.Admsyllabus.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Admission.Admsyllabus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'npdf' => ['mimes:pdf,csv,xlsx,txt,docx,doc,xls', 'required']
        ]);

        $filePath = handleUpload('npdf');

        $Admsyllabus = new Admsyllabus();
        $Admsyllabus->title = $request->title;
        $Admsyllabus->npdf = $filePath;
        $Admsyllabus->save();


        toastr()->success('Created successfully!', 'Congrats!');
        return redirect()->route('admin.Admsyllabus.index');
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
        $Admsyllabus = Admsyllabus::findOrFail($id);
        return view('admin.Admission.Admsyllabus.edit', compact('Admsyllabus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'npdf' => ['mimes:pdf,csv,xlsx,txt,docx,doc,xls']
        ]);
        
        $Admsyllabus = Admsyllabus::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Admsyllabus->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Admsyllabus);
            $Admsyllabus->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Admsyllabus->title = $request->title;
        $Admsyllabus->save();


        toastr()->success('Rules Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Admsyllabus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Admsyllabus = Admsyllabus::findOrFail($id);
        deleteFileIfExist($Admsyllabus->npdf);
        $Admsyllabus->delete();
    }
}
