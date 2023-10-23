<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdmrulesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admrules;
use Illuminate\Http\Request;

class AdmrulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AdmrulesDataTable $dataTable)
    {
        return $dataTable->render('admin.Admission.Admrules.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Admission.Admrules.create');
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

        $Admrules = new Admrules();
        $Admrules->title = $request->title;
        $Admrules->npdf = $filePath;
        $Admrules->save();


        toastr()->success('Rules Created successfully!', 'Congrats!');
        return redirect()->route('admin.Admrules.index');
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
        $Admrules = Admrules::findOrFail($id);
        return view('admin.Admission.Admrules.edit', compact('Admrules'));
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
        
        $Admrules = Admrules::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Admrules->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Admrules);
            $Admrules->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Admrules->title = $request->title;
        $Admrules->save();


        toastr()->success('Rules Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Admrules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Admrules = Admrules::findOrFail($id);
        deleteFileIfExist($Admrules->npdf);
        $Admrules->delete();
    }
}
