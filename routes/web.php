<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{tipo?}', function ($tipo = null) { //{variable} <-- variable en donde se va a almacenar el nombre de mi /ruta
    //dd($tipo);    
    return view('contacto', compact('tipo')); //<-- volver publica una variable para utilizarla en otros archivos
    //return view('contacto')-> with(['otro_nombre' => $tipo]); //<-- cambiar el nombre de una variable para que se vuelva publica
});

Route::post('/contacto', function (Request $request) {
    //return "Hola post de formulario";

    //var_dump() <-- sacar valor y tipo de una variable


    //dd($request->correo); <-- muestra solo el correo
    dd($request->all()); // <-- quiero que mi aplicacion se muera y me muestre lo que tiene el request (debugear)
});
