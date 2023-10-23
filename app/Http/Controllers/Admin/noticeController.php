<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NoticeDataTable;
use App\Http\Controllers\Controller;
use App\Models\Ncatagory;
use App\Models\Notice;
use Illuminate\Http\Request;

class noticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NoticeDataTable $datatable)
    {
        return $datatable->render('admin.Notice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Ncatagory::all();
        return view('admin.Notice.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'category_id' =>['required', 'numeric'],
            'npdf' => ['mimes:pdf,csv,xlsx,txt,docx,doc,xls', 'required']
        ]);

        $filePath = handleUpload('npdf');

        $Notice = new Notice();
        $Notice->title = $request->title;
        $Notice->category_id = $request->category_id;
        $Notice->npdf = $filePath;
        $Notice->save();


        toastr()->success('Notice Created successfully!', 'Congrats!');
        return redirect()->route('admin.Notice.index');


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
        $categories= Ncatagory::all();
        $Notice = Notice::findOrFail($id);
        return view('admin.Notice.edit', compact('categories','Notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'max:200'],
            'category_id' =>['required', 'numeric'],
            'npdf' => ['mimes:pdf,csv,xlsx,txt,docx,doc,xls']
        ]);
        
        $Notice = Notice::findOrFail($id);

        // $filePath = handleUpload('npdf');
        $previousFilePath = $Notice->npdf; // Store the previous file path

        // Check if a new file is uploaded
        if ($request->hasFile('npdf')) {
            $filePath = handleUpload('npdf', $Notice);
            $Notice->npdf = $filePath;
            
            // Delete the previous file
            if (\File::exists(public_path($previousFilePath))) {
                \File::delete(public_path($previousFilePath));
            }
        }
        
        $Notice->title = $request->title;
        $Notice->category_id = $request->category_id;
        $Notice->save();


        toastr()->success('Notice Created successfully!', 'Congrats!');
        return redirect()->route('admin.Notice.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Notice = Notice::findOrFail($id);
        deleteFileIfExist($Notice->npdf);
        $Notice->delete();
    }
}
