<?php

namespace App\Http\Controllers;

use PhpParser\Node\Stmt\Return_;

class MessagesController extends Controller
{
    public function store()
    {

        request()->validate([
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

        return 'datos validados';

    }
    
}
