<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;
class TipoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-tipo|crear-tipo|editar-tipo|borrar-tipo',['only'=>['index']]);
        $this->middleware('permission:crear-tipo',['only'=>['create','store']]);
        $this->middleware('permission:editar-tipo',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-tipo',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = Tipo::paginate(5);
        return view('tipos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(['name'=>'required']);
        Tipo::create($request->all());
        return redirect()->route('tipos.index');
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
    public function edit(Tipo $tipo)
    {
        return view('tipos.editar',compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo $tipo)
    {
        request()->validate(['name'=>'required']);
        $tipo->Update($request->all());
        return redirect()->route('tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();
        return redirect()->route('tipos.index');
    }
}
