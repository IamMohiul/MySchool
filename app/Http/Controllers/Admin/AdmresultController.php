<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdmresultDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admresult;
use Illuminate\Http\Request;

class AdmresultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AdmresultDataTable $dataTable)
    {
        return $dataTable->render('admin.Admission.Admresult.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Admission.Admresult.create');
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

        $Admresult = new Admresult();
        $Admresult->title = $request->title;
        $Admresult->npdf = $filePath;
        $Admresult->save();


        toastr()->success('Rules Created successfully!', 'Congrats!');
        return redirect()->route('admin.Admresult.index');
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
        $Admresult = Admresult::findOrFail($id);
        return view('admin.Admission.Admresult.edit', compact('Admresult'));
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
        
        $Admresult = Admresult::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Admresult->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Admresult);
            $Admresult->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Admresult->title = $request->title;
        $Admresult->save();

        toastr()->success('Rules Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Admresult.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Admresult = Admresult::findOrFail($id);
        deleteFileIfExist($Admresult->npdf);
        $Admresult->delete();
    }
}
