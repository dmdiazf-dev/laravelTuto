<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller {

    public function index(){
        return view("upload");
    }

    public function uploadFile(Request $request){
        //dd($test)                                                       //VarDump resumido de laravel
        //$test = $request->file('formFile')->guessExtension();           //Obtener la extension del archivo (Tipo del archivo)
        //$mime = $request->file('formFile')->getMimeType();              //Obtener el mime-type del archivo
        //$name = $request->file('formFile')->getClientOriginalName();    //Obtener el nombre del archivo
        //$guess = $request->file('formFile')->guessClientExtension();    //Obtener la extension del archivo
        //$size = $request->file('formFile')->getSize();                  //Obtener el tamaño del archivo
        //$err = $request->file('formFile')->getError();                  //Valida si hay errores al cargar el archivo (0-No hay errores, 1-Hubo errores);
        //$valid = $request->file('formFile')->isValid();                 //Retorna true / false si el archivo que se ingresa es valido

        //METODOS PARA EL TRATAMIENTO DE ARCHIVOS
        //=======================================
        //store()
        //asStore()
        //storePublicly()
        //move
        //getClientOriginalName()
        //getClientMimeType()
        //guessClientExtension()
        //getSize()
        //getError()

        //$test = $request->file('formFile')->getMimeType();
        //dd($test);

        //Validar el formulario
        $request->validate([
            'selectOne' => 'required',
            'selectTwo' => 'required',
            'formFile' => 'required|mimes:csv,txt,xlsx,xls|max:10485760'  //10 MB
        ]);

        $newFileName = time() . '.' . $request->formFile->extension(); //Crear nuevo nombre para almacenar el archivo
        $test = $request->formFile->move(public_path('upload-resources'), $newFileName);  //Mover el archivo a la ruta especificada

        //dd($test);




    }

}
