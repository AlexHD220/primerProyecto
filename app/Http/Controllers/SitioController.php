<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    //
    public function contactoForm($tipo = null){
        return view('contacto', compact('tipo'));
    }

    public function contactoSave(Request $request){
        $request->validate([ ///Validar datos, si los datos recibidos no cumplen estas regresas no les permite la entrada a la base de datos y regresa a la pagina original
            'correo' => 'required|email',
            'comentario' => ['required','min:10','max:50'], //requerido minio 10 caracteres
        ]);
    
        $contacto = new Contacto(); //quiero una nueva instanciade este modelo que va a representar mi tabla (representante de alto nivel)
        //Contacto --> a las clases se les nombra con matusculas (modelos)
        $contacto->correo = $request->correo; //asignari atributos que corresonden por como se llaman mis columnas
        $contacto->comentario = $request->comentario; 
        $contacto->save();
    
        return redirect('/contacto'); 
    }
}
