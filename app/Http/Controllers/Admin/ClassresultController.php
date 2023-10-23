<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClassresultDataTable;
use App\Http\Controllers\Controller;
use App\Models\Classresult;
use Illuminate\Http\Request;

class ClassresultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClassresultDataTable $dataTable)
    {
        return $dataTable->render('admin.Results.Classresult.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Results.Classresult.create');
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

        $Classresult = new Classresult();
        $Classresult->title = $request->title;
        $Classresult->npdf = $filePath;
        $Classresult->save();


        toastr()->success('Files Created successfully!', 'Congrats!');
        return redirect()->route('admin.Classresult.index');
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
        $Classresult = Classresult::findOrFail($id);
        return view('admin.Results.Classresult.edit', compact('Classresult'));
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
        
        $Classresult = Classresult::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Classresult->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Classresult);
            $Classresult->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Classresult->title = $request->title;
        $Classresult->save();

        toastr()->success('File Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Classresult.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Classresult = Classresult::findOrFail($id);
        deleteFileIfExist($Classresult->npdf);
        $Classresult->delete();
    }
}
