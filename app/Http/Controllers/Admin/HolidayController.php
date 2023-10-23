<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\HolidayDataTable;
use App\Http\Controllers\Controller;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HolidayDataTable $dataTable)
    {
        return $dataTable->render('admin.Academic.Holiday.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Academic.Holiday.create');
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

        $Holiday = new Holiday();
        $Holiday->title = $request->title;
        $Holiday->npdf = $filePath;
        $Holiday->save();


        toastr()->success('Notice Created successfully!', 'Congrats!');
        return redirect()->route('admin.Holiday.index');
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
        $Holiday = Holiday::findOrFail($id);
        return view('admin.Academic.Holiday.edit', compact('Holiday'));
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
        
        $Holiday = Holiday::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Holiday->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Holiday);
            $Holiday->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Holiday->title = $request->title;
        $Holiday->save();


        toastr()->success('Holiday Created successfully!', 'Congrats!');
        return redirect()->route('admin.Holiday.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Holiday = Holiday::findOrFail($id);
        deleteFileIfExist($Holiday->npdf);
        $Holiday->delete();
    }
}
