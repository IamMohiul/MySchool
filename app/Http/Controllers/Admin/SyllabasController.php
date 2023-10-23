<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SyllabasDataTable;
use App\Http\Controllers\Controller;
use App\Models\Syllabas;
use Illuminate\Http\Request;

class SyllabasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SyllabasDataTable $dataTable)
    {
        return $dataTable->render('admin.Academic.Syllabas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Academic.Syllabas.create');
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

        $Syllabas = new Syllabas();
        $Syllabas->title = $request->title;
        $Syllabas->npdf = $filePath;
        $Syllabas->save();


        toastr()->success('Syllabas Created successfully!', 'Congrats!');
        return redirect()->route('admin.Syllabas.index');
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
        $Syllabas = Syllabas::findOrFail($id);
        return view('admin.Academic.Syllabas.edit', compact('Syllabas'));
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
        
        $Syllabas = Syllabas::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Syllabas->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Syllabas);
            $Syllabas->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Syllabas->title = $request->title;
        $Syllabas->save();


        toastr()->success('Syllabas Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Syllabas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Syllabas = Syllabas::findOrFail($id);
        deleteFileIfExist($Syllabas->npdf);
        $Syllabas->delete();
    }
}
