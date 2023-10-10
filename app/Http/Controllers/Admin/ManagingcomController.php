<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ManagingcomDataTable;
use App\Http\Controllers\Controller;
use App\Models\Managingcom;
use Illuminate\Http\Request;

class ManagingcomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ManagingcomDataTable $dataTable)
    {
        return $dataTable->render('admin.administrative.Managingcom.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administrative.Managingcom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'position' => ['required', 'max:200'],
        ]);

        $filePath = handleUpload('image');

        $Managingcom = new Managingcom();
        $Managingcom->title = $request->title;
        $Managingcom->position = $request->position;
        $Managingcom->image = $filePath;
        $Managingcom->save();


        toastr()->success('Notice Created successfully!', 'Congrats!');
        return redirect()->route('admin.Managingcom.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
