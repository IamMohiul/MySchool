<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CalenderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Calender;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CalenderDataTable $dataTable)
    {
        return $dataTable->render('admin.Academic.Calender.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Academic.Calender.create');
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

        $Calender = new Calender();
        $Calender->title = $request->title;
        $Calender->npdf = $filePath;
        $Calender->save();


        toastr()->success('Notice Created successfully!', 'Congrats!');
        return redirect()->route('admin.Calender.index');
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
        $Calender = Calender::findOrFail($id);
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
        
        $Calender = Calender::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Calender->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Calender);
            $Calender->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Calender->title = $request->title;
        $Calender->save();


        toastr()->success('Notice Created successfully!', 'Congrats!');
        return redirect()->route('admin.Calender.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Calender = Calender::findOrFail($id);
        deleteFileIfExist($Calender->npdf);
        $Calender->delete();
    }
}
