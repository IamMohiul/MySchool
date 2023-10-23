<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\classmakeDataTable;
use App\Http\Controllers\Controller;
use App\Models\classmake;
use App\Models\NavigationMenu;
use Illuminate\Http\Request;

class classmakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(classmakeDataTable $dataTable)
    {
        return $dataTable->render('admin.students.Classmake.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.students.Classmake.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','max:200']
        ]);

        $Classmake = new classmake();
        $Classmake->name = $request->name;
        $Classmake->slug = \Str::slug($request->name);
        $Classmake->save();

        // Create a new navigation menu item with the category title
        $menu = new NavigationMenu();
        $menu->menu_name = $Classmake->name;
        $menu->menu_url = '/students/' . $Classmake->id; // You can customize the URL as needed
        $menu->save();

        toastr()->success('Class Created successfully!', 'Congrats!');
        return redirect()->route('admin.Classmake.index');

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
        $Classmake = classmake::findOrFail($id);
        return view ('admin.students.Classmake.edit', compact('Classmake'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>['required','max:200']
        ]);

        $Classmake = classmake::findOrFail($id);
        $Classmake->name = $request->name;
        $Classmake->slug = \Str::slug($request->name);
        $Classmake->save();

        // Create a new navigation menu item with the category title
        $menu = new NavigationMenu();
        $menu->menu_name = $Classmake->name;
        $menu->menu_url = '/students/' . $Classmake->id; // You can customize the URL as needed
        $menu->save();

        toastr()->success('Class Updated successfully!', 'Congrats!');
        return redirect()->route('admin.Classmake.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Classmake = classmake::findOrFail($id);
        $Classmake->delete();
    }
}
