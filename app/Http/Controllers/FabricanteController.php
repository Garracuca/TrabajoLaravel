<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fabricantes=Fabricante::all();
        return view('fabricante.index',compact('fabricantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fabricante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rs'=>'required|string|unique:fabricantes,rs',
            'direccion'=>['required','string','max:50'],
            'telefono'=>'required|string|max:12',
            

        ]);
        $datos = $request->all();
      
        $fabricante=Fabricante::create($datos);
       
        return Redirect ("/fabricantes/" .$fabricante->id)->with('Éxito', 'Fabricante creado correctamente');
    }
   


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
        $fabricante=Fabricante::findOrFail($id);
       

return view('fabricante.show',compact('fabricante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fabricante=Fabricante::findOrFail($id);// busco el fabricante con ese id
        return view('fabricante.edit',compact('fabricante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'rs'=>'|string|',
            'direccion'=>['required','string','max:50'],
            'telefono'=>'required|string|max:12',
            

        ]);
        $fabricante=Fabricante::find($id);
        $fabricante-> update($request->all());

 
    
        return Redirect ("/fabricantes/" .$fabricante->id)->with('Éxito', 'Fabricante modificado correctamente');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fabricante=Fabricante::findOrFail($id);
        $fabricante -> delete();
        // return redirect ()->route('fabricante.index',$fabricante->id)->with('Éxito', 'Fabricante borrado correctamente');
        return Redirect ("/fabricantes/")->with('Éxito', 'Fabricante borrado correctamente');
    }
}
