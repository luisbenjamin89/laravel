<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $rand=rand(1,10);

        return view ("pagina",["numero"=>$rand]);
    }
}
