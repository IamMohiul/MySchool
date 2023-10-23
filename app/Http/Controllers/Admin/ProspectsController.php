<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProspectsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Prospects;
use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProspectsDataTable $dataTable)
    {
        return $dataTable->render('admin.Admission.Prospects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Admission.Prospects.create');
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

        $Prospects = new Prospects();
        $Prospects->title = $request->title;
        $Prospects->npdf = $filePath;
        $Prospects->save();


        toastr()->success('Prospects Created successfully!', 'Congrats!');
        return redirect()->route('admin.Prospects.index');
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
        $Prospects = Prospects::findOrFail($id);
        return view('admin.Admission.Prospects.edit', compact('Prospects'));
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
        
        $Prospects = Prospects::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Prospects->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Prospects);
            $Prospects->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Prospects->title = $request->title;
        $Prospects->save();


        toastr()->success('Prospects Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Prospects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Prospects = Prospects::findOrFail($id);
        deleteFileIfExist($Prospects->npdf);
        $Prospects->delete();
    }
}
