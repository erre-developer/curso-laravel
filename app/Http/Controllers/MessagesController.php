<?php

namespace App\Http\Controllers;

use PhpParser\Node\Stmt\Return_;

class MessagesController extends Controller
{
    public function store()
    {
        return request(); 
    }
}
