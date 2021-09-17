<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Mensaje de Prueba desde la aplicación"; //Asunto del mensaje
    public $msg = ""; //No utilizar la palabra reservada 'message'

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg){
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        /*return $this->from("dandiazfo@gmail.com", "Daniel Díaz")
                      ->view('emails.contacto');*/
        return $this->view('emails.contacto');
    }

}
