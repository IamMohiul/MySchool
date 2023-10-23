<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SuggestionDataTable;
use App\Http\Controllers\Controller;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SuggestionDataTable $dataTable)
    {
        return $dataTable->render('admin.Exam.Suggestion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Exam.Suggestion.create');
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

        $Suggestion = new Suggestion();
        $Suggestion->title = $request->title;
        $Suggestion->npdf = $filePath;
        $Suggestion->save();


        toastr()->success('File Created successfully!', 'Congrats!');
        return redirect()->route('admin.Suggestion.index');
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
        $Suggestion = Suggestion::findOrFail($id);
        return view('admin.Exam.Suggestion.edit', compact('Suggestion'));
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
        
        $Suggestion = Suggestion::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Suggestion->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Suggestion);
            $Suggestion->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Suggestion->title = $request->title;
        $Suggestion->save();

        toastr()->success('File Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Suggestion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Suggestion = Suggestion::findOrFail($id);
        deleteFileIfExist($Suggestion->npdf);
        $Suggestion->delete();
    }
}
