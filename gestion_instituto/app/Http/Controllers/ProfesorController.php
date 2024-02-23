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
    public function edit(profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprofesorRequest $request, profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        $profesor = Profesor::find($id);

        session()->flash("status", "se borro correctamente elprofesor $profesor->nombre");
        $profesor->delete();
        $profesor = Profesor::all();


        return view("Profesores.listado_profesore", ["Profesor" => $profesor]);
        //
    }
}
