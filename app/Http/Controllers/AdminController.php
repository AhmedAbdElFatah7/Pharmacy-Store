<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdmin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicine = new Medicine();
        $medicines = $medicine->all();
        return view('admin/admin',compact('medicines'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicine = new Medicine();
        $medicine->name = $request->name;
        $medicine->price = $request->price;
        $medicine->image = $request->image;
        $medicine->category = $request->category;
        $medicine->indications_for_use = $request->indications_for_use;
        $medicine->side_effects = $request->side_effects;
        $medicine->save();
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medicine = Medicine::find($id);
        return view('admin/show',compact('medicine'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medicine = Medicine::find($id);
        return view('admin/edit',compact('medicine'));
        ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $medicine = Medicine::find($id);
        $medicine->name = $request->name;
        $medicine->price = $request->price;
        $medicine->image = $request->image;
        $medicine->category = $request->category;
        $medicine->indications_for_use = $request->indications_for_use;
        $medicine->side_effects = $request->side_effects;
        $medicine->save();
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();
        return redirect('admin');
    }
}
