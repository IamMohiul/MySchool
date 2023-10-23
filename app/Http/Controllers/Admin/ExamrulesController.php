<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExamrulesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Examrules;
use Illuminate\Http\Request;

class ExamrulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ExamrulesDataTable $dataTable)
    {
        return $dataTable->render('admin.Exam.Examrules.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Exam.Examrules.create');
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

        $Examrules = new Examrules();
        $Examrules->title = $request->title;
        $Examrules->npdf = $filePath;
        $Examrules->save();


        toastr()->success('Rules Created successfully!', 'Congrats!');
        return redirect()->route('admin.Examrules.index');
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
        $Examrules = Examrules::findOrFail($id);
        return view('admin.Exam.Examrules.edit', compact('Examrules'));
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
        
        $Examrules = Examrules::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Examrules->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Examrules);
            $Examrules->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Examrules->title = $request->title;
        $Examrules->save();

        toastr()->success('Rules Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Examrules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Examrules = Examrules::findOrFail($id);
        deleteFileIfExist($Examrules->npdf);
        $Examrules->delete();
    }
}
