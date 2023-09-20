<?php

use App\Http\Controllers\SitioController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contacto;

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

Route::get('/contacto/{tipo?}',[SitioController::class,'contactoForm']);

//Route::get('/contacto/{tipo?}', function ($tipo = null){ //{variable} <-- variable en donde se va a almacenar el nombre de mi /ruta
    //dd($tipo);    
    //return view('contacto', compact('tipo')); //<-- volver publica una variable para utilizarla en otros archivos
    //return view('contacto')-> with(['otro_nombre' => $tipo]); //<-- cambiar el nombre de una variable para que se vuelva publica
//});

Route::post('/contacto',[SitioController::class,'contactoSave']);

//Route::post('/contacto', function (Request $request) {//peticion tipo post hacia un action llamado contacto, el request contine toda la informacion del formulario
    //return "Hola post de formulario";

    //var_dump() <-- sacar valor y tipo de una variable


    //dd($request->correo); <-- muestra solo el correo
    //dd($request->all()); // <-- quiero que mi aplicacion se muera y me muestre lo que tiene el request (debugear)

    /*$request->validate([ ///Validar datos, si los datos recibidos no cumplen estas regresas no les permite la entrada a la base de datos y regresa a la pagina original
        'correo' => 'required|email',
        'comentario' => ['required','min:10','max:50'], //requerido minio 10 caracteres
    ]);

    $contacto = new Contacto(); //quiero una nueva instanciade este modelo que va a representar mi tabla (representante de alto nivel)
    //Contacto --> a las clases se les nombra con matusculas (modelos)
    $contacto->correo = $request->correo; //asignari atributos que corresonden por como se llaman mis columnas
    $contacto->comentario = $request->comentario; 
    $contacto->save();

    return redirect('/contacto'); // <-- redireccionarme a la ruta contacto una vez que envia los datos 
    
});*/

Route::resource('tarea',TareaController::class);