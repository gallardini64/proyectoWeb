<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogoController extends Controller
{
    public function catalogo()
    {
        return view('catalogo');
    }
}
