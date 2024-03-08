<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $alumnos = Alumno::all();
        $alumnos =json_encode($alumnos);
         $n=rand(1,100);
        return view('saludo',["alumnos"=>$alumnos, "n" => $n]);
    }
}
