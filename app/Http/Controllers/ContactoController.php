<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacto;

class ContactoController extends Controller {

    public function index() {
        return view("contacto");
    }

    public function sendMessage(Request $request) {

        request()->validate([
            'txtNombres' => 'required',
            'txtApellidos' => 'required',
            'txtDireccion' => 'required',
            'txtTelefono' => 'required',
            'txtEmail' => 'required|email',
            'txtAsunto' => 'required',
            'txtMensaje' => 'required|min:5'
        ]);

        $contact = new Contacto();
        $contact->nombres = $request->txtNombres;
        $contact->apellidos = $request->txtApellidos;
        $contact->direccion = $request->txtDireccion;
        $contact->telefono = $request->txtTelefono;
        $contact->email = $request->txtEmail;
        $contact->asunto = $request->txtAsunto;
        $contact->mensaje = $request->txtMensaje;
        $contact->save();
        return redirect("/");



    }

}
