<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NcatagoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Ncatagory;
use Illuminate\Http\Request;

class NcatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(NcatagoryDataTable $dataTable)
    {
        return $dataTable->render('admin.Ncatagory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Ncatagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','max:200']
        ]);

        $Ncatagory = new Ncatagory();
        $Ncatagory->name = $request->name;
        $Ncatagory->slug = \Str::slug($request->name);
        $Ncatagory->save();

        toastr()->success('Category Created successfully!', 'Congrats!');
        return redirect()->route('admin.Ncatagory.index');

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
        $Ncatagory = Ncatagory::findOrFail($id);
        return view ('admin.Ncatagory.edit', compact('Ncatagory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>['required','max:200']
        ]);

        $Ncatagory = Ncatagory::findOrFail($id);
        $Ncatagory->name = $request->name;
        $Ncatagory->slug = \Str::slug($request->name);
        $Ncatagory->save();

        toastr()->success('Category Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Ncatagory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Ncatagory = Ncatagory::findOrFail($id);
        $Ncatagory->delete();
    }
}
