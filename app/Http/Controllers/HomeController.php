<?php

namespace App\Http\Controllers;
use App\Models\Material;
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
        $materiales = Material::where('tipo_id','1')->get();
        return view('home')->with('materiales', $materiales);
    }
    public function show($id){
        $material = Material::find($id);
        return view('show', compact('material'));
    }
}
