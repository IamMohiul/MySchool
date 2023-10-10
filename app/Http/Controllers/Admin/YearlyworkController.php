<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\YearlyworkDataTable;
use App\Http\Controllers\Controller;
use App\Models\Yearlywork;
use Illuminate\Http\Request;

class YearlyworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(YearlyworkDataTable $dataTable)
    {
        return $dataTable->render('admin.about.Yearlywork.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.Yearlywork.create');
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

        $Yearlywork = new Yearlywork();
        $Yearlywork->title = $request->title;
        $Yearlywork->npdf = $filePath;
        $Yearlywork->save();


        toastr()->success('Work Created successfully!', 'Congrats!');
        return redirect()->route('admin.Yearlywork.index');
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
        $Yearlywork = Yearlywork::findOrFail($id);
        return view('admin.about.Yearlywork.edit', compact('Yearlywork'));
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
        $Yearlywork = Yearlywork::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Yearlywork->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Yearlywork);
            $Yearlywork->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Yearlywork->title = $request->title;
        $Yearlywork->category_id = $request->category_id;
        $Yearlywork->save();


        toastr()->success('Work Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Yearlywork.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Yearlywork = Yearlywork::findOrFail($id);
        deleteFileIfExist($Yearlywork->npdf);
        $Yearlywork->delete();
    }
}
