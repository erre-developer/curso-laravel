<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

use PhpParser\Node\Stmt\Return_;

class MessageController extends Controller
{
    public function store()
    {
        $mensaje = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:5'
        ],[
            'name.required'=>'Campo nombre es obligatorio',
            'email.required'=>'Campo e-mail es obligatorio',
            'subject.required'=>'Campo asunto es obligatorio',
            'content.required'=>'Agregar contenido es obligatorio'
        ]);

        Mail::to('richardfoncea@gmail.com')->queue(new MessageReceived($mensaje));

        return 'Mensaje enviado correctamente';

    }
    
}
