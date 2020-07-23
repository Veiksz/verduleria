<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function mercaderia(){
        $mercaderia = App\Mercaderia::all();
        return view('mercaderia', compact('mercaderia'));
    }

    public function clientes(){
        $cliente = App\Cliente::all();
        return view('clientes', compact('cliente'));
    }

    public function trabajador(){
        $trabajador = App\Trabajador::all();
        return view('trabajador', compact('trabajador'));
    }

    public function distribuidor(){
        $distribuidor = App\Distribuidor::all();
        return view('distribuidor', compact('distribuidor'));
    }
}