<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $mensaje = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ], [
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu correo',
            'email.email' => 'Ingresa un correo válido',
            'asunto.required' => 'Ingresa un asunto',
            'mensaje.required' => 'Ingresa el mensaje',
        ]);

        Mail::to('t012701120@unitru.edu.pe')->send(new MensajeRecibido($mensaje));

        return 'Datos validados y correo enviado correctamente.';
    }
}

