<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/saludo",fn()=>"hola"); /*regresando texto*/
Route::get("/saludo1",fn()=>view("saludo"));/*regresando una vista*/

Route::get("/pagina",[MainController::class,"index"]);/*regresando un controlador*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("About",fn()=>view("inicio/About"));
Route::get("contactanos",fn()=>view("inicio/contactanos"));
Route::get("principal",fn()=>view("inicio/principal"));
