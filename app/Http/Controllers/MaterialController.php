<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Material;
use Illuminate\Support\Arr;
class MaterialController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-material|crear-material|editar-material|borrar-material', ['only' => ['index']]);
        $this->middleware('permission:crear-material', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-material', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-material', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiales = Material::with(['categoria', 'tipo'])->paginate(5);
        return view('materiales.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::pluck('name', 'id')->all();
        $tipos = Tipo::pluck('name', 'id')->all();
        return view('materiales.crear', compact('categorias', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'titulo' => 'required',
            'categoria_id' => 'required',
            'tipo_id' => 'required',
            'contenido' => 'required'
        ]);
        Material::create([
            'titulo' => $request->get('titulo'),
            'categoria_id' => $request->get('categoria_id'),
            'tipo_id' => $request->get('tipo_id'),
            'contenido' => $request->get('contenido'),
        ]);

        return redirect()->route('materiales.index');
    }

    /**
     * Display the specified resource.
     */
   

    public function show ()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorias = Categoria::pluck('name', 'id')->all();
        $tipos = Tipo::pluck('name', 'id')->all();
        $material = Material::findOrFail($id);
        return view('materiales.editar', compact('material', 'categorias', 'tipos'));
    }
    public function update(Request $request, string $id)
    {
        request()->validate([
            'titulo' => 'required',
            'categoria_id' => 'required',
            'tipo_id' => 'required',
            'contenido'
        ]);
        $input = $request->all();
        
        if(!empty($input['contenido'])){
            $input['contenido'];
        }else{
            $input = Arr::except($input,array('contenido'));
        }
        
        $material = Material::find($id);
        $material->update($input);
        return redirect()->route('materiales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->route('materiales.index');
    }
}
