<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMessage;
use Illuminate\Http\Request;
use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller {

    public function index() {
        return view("contacto");
    }

    public function sendMessage(Request $request) {

        //Validar los datos del formulario y configurar los mensajes en español
        $msg = request()->validate([
            'txtNombres' => 'required',
            'txtApellidos' => 'required',
            'txtDireccion' => 'required',
            'txtTelefono' => 'required',
            'txtEmail' => 'required|email',
            'txtAsunto' => 'required',
            'txtMensaje' => 'required|min:5'
        ],
        [   'txtNombres.required' => 'El campo Nombres es obligatorio.',
            'txtApellidos.required' => 'El campo Apellidos es obligatorio',
            'txtDireccion.required' => 'El campo Dirección es obligatorio',
            'txtTelefono.required' => 'El campo Teléfono es obligatorio',
            'txtEmail.required' => 'El campo Email es obligatorio',
            'txtEmail.email' => 'Email no es un correo válido',
            'txtAsunto.required' => 'El campo Asunto es obligatorio',
            'txtMensaje.required' => 'El campo Mensaje es obligatorio',
            'txtMensaje.min' => 'Mensaje debe contener al menos 5 caracteres.'
        ]);

        //Enviar los datos del formulario por email
        Mail::to("dandiazfo@gmail.com")->queue(new ContactoMessage($msg));

        //Almacenar el registro del contacto en la base de datos (Tabla: contactos)
        $contact = new Contacto();
        $contact->nombres = $request->txtNombres;
        $contact->apellidos = $request->txtApellidos;
        $contact->direccion = $request->txtDireccion;
        $contact->telefono = $request->txtTelefono;
        $contact->email = $request->txtEmail;
        $contact->asunto = $request->txtAsunto;
        $contact->mensaje = $request->txtMensaje;
        $contact->save();

        return new ContactoMessage($msg); //Mostrar el resultado del email en la pantalla
        //return redirect("/");           //Redireccionar al home nuevamente

    }

}
