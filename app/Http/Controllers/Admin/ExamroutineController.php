<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExamroutineDataTable;
use App\Http\Controllers\Controller;
use App\Models\Examroutine;
use Illuminate\Http\Request;

class ExamroutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ExamroutineDataTable $dataTable)
    {
        return $dataTable->render('admin.Exam.Examroutine.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Exam.Examroutine.create');
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

        $Examroutine = new Examroutine();
        $Examroutine->title = $request->title;
        $Examroutine->npdf = $filePath;
        $Examroutine->save();


        toastr()->success('Rules Created successfully!', 'Congrats!');
        return redirect()->route('admin.Examroutine.index');
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
        $Examroutine = Examroutine::findOrFail($id);
        return view('admin.Exam.Examroutine.edit', compact('Examroutine'));
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
        
        $Examroutine = Examroutine::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Examroutine->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Examroutine);
            $Examroutine->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Examroutine->title = $request->title;
        $Examroutine->save();

        toastr()->success('Rules Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Examroutine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Examroutine = Examroutine::findOrFail($id);
        deleteFileIfExist($Examroutine->npdf);
        $Examroutine->delete();
    }
}
