<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos=Alumno::paginate(5);
        return view("Alumnos.listado",["alumnos"=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
       //
        $valores =$request->input();
        $alumno =new Alumno($valores);
        $alumno -> save();
        $alumnos= Alumno::paginate(5);
        return view("Alumnos.listado",["alumnos"=>$alumnos]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
     return view("Alumnos.idiomas", ["alumno" => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
       
      return view("Alumnos.editar",["alumno"=>$alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
       $valores=$request->input();
       $alumno->update($valores);
       $alumno = paginate(5);
      return view("Alumnos.listado", ["alumnos" => $alumno]);//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        $alumnos = Alumno::paginate(5);
        return view("Alumnos.listado", ["alumnos" => $alumnos]);
        //
    }
}
