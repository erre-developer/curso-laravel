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
        ]);

        return 'datos validados';

    }
    
}
