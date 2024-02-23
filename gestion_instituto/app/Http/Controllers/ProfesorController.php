<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprofesorRequest;
use App\Http\Requests\UpdateprofesorRequest;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesor = Profesor::all();
        return view("Profesores.listado_profesore", ["Profesor" => $profesor]);
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Profesores.agregar_profesores");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprofesorRequest $request)
    {
        $valores = $request->input();
        $profesor = new Profesor($valores);
        $profesor->save();
        $profesor = Profesor::all();
        session()->flash("status", "Profesor agregado correctamente");
        return view("Profesores.listado_profesore", ["Profesor" => $profesor]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $profesor = Profesor::find($id);

        return view("Profesores.editar_profesor", ["profesor" => $profesor]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprofesorRequest $request, int $id)
    {
        $profesor = Profesor::find($id);
       $valores = $request->input();
       $profesor->update($valores);
        session()->flash("status", "se actulizo correctamente el profesor ");
      $profesor = Profesor::all();
     return view("Profesores.listado_profesore", ["Profesor" => $profesor]);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        $profesor = Profesor::find($id);
        $profesor->delete();
        session()->flash("status", "se borro correctamente elprofesor $profesor->nombre");
        $profesor = Profesor::all();


        return view("Profesores.listado_profesore", ["Profesor" => $profesor]);
        //
    }
}
