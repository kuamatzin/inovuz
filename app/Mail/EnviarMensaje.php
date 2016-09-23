<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarMensaje extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;
    public $email;
    public $nombre;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email, $mensaje)
    {
        $this->mensaje = $mensaje;
        $this->email = $email;
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contacto');
    }
}
