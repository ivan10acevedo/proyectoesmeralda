<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=productos::orderBy('nombre','ASC')->get();
        return view('productos',['productos'=>$productos]);
    }
    public function catalogo($id)
    {
        
    
        // Si deseas obtener todos los productos ordenados por nombre
        $caracteristicas = productos::orderBy('nombre', 'ASC')
        ->where('codigoproducto', '=', $id)
        ->get();
        $productos=productos::orderBy('nombre','ASC')->get();
    
        return view('caracteristicas', ['caracteristicas' => $caracteristicas,'productos'=>$productos]);
    }
    public function categoria($id)
    {
        $caracteristicas = productos::where('codigocategoria', '=', $id)->get();
        $productos = productos::orderBy('nombre', 'ASC')->get();
    
        return view('productos', ['productos' => $caracteristicas]);
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   
     public function show()
     {
         $productos = Archivo::all(); 
     
         return view('productos', compact('productos'));
 
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
