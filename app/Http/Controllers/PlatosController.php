<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatosController extends Controller
{
    
    public function index()
    {
        return view('livewire.restaurante.platos');
    }

}
