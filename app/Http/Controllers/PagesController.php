<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function CrearMercaderia(Request $request){
        //return $request->all();

        $mercaderia = new App\Mercaderia;
        $mercaderia->Nombre = $request->Nombre;
        $mercaderia->Stock = $request->Stock;
        $mercaderia->Precio = $request->Precio;
        $mercaderia->save();

        return back()->with('mensaje', 'Producto ingresado.');
    }

    public function mercaderia(){
        $mercaderia = App\Mercaderia::all();
        return view('mercaderia', compact('mercaderia'));
    }

    public function clientes(){
        $cliente = App\Cliente::all();
        return view('clientes', compact('cliente'));
    }

    public function vendedor(){
        $vendedor = App\Vendedor::all();
        return view('trabajador', compact('vendedor'));
    }

    public function distribuidor(){
        $distribuidor = App\Distribuidor::all();
        return view('distribuidor', compact('distribuidor'));
    }
}