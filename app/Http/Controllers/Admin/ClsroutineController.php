<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClsroutineDataTable;
use App\Http\Controllers\Controller;
use App\Models\Clsroutine;
use Illuminate\Http\Request;

class ClsroutineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClsroutineDataTable $dataTable)
    {
        return $dataTable->render('admin.Academic.Clsroutine.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Academic.Clsroutine.create');
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

        $Clsroutine = new Clsroutine();
        $Clsroutine->title = $request->title;
        $Clsroutine->npdf = $filePath;
        $Clsroutine->save();


        toastr()->success('Notice Created successfully!', 'Congrats!');
        return redirect()->route('admin.Clsroutine.index');
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
        $Clsroutine = Clsroutine::findOrFail($id);
        return view('admin.Academic.Calender.edit', compact('Calender'));
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
        
        $Clsroutine = Clsroutine::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Clsroutine->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Clsroutine);
            $Clsroutine->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Clsroutine->title = $request->title;
        $Clsroutine->save();


        toastr()->success('Notice Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Clsroutine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Clsroutine = Clsroutine::findOrFail($id);
        deleteFileIfExist($Clsroutine->npdf);
        $Clsroutine->delete();
    }
}
