<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user/home');
    }

    public function show(string $id)
    {
        $medicine = Medicine::find($id);
        return view('user/view',compact('medicine')); 
    }
    public function checkout(string $id)
    {
        $medicine = Medicine::find($id);
        return view('user/checkout',compact('medicine')); 
    }
    public function house()
    {   
        $medicine = new Medicine();
        $medicines = $medicine->all()->where('category','medicine');
        $cares = $medicine->all()->where('category','care');
        return view('user/house',compact(['medicines','cares'])); 
    }
}
