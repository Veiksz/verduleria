<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function mercaderia(){
        $mercaderia = App\Mercaderia::all();
        return view('mercaderia', compact('mercaderia'));
    }

    public function CrearMercaderia(Request $request){
        //return $request->all();

        $request->validate([
            'Nombre' => 'required',
            'Stock' => 'required',
            'Precio' => 'required'
        ]);

        $mercaderia = new App\Mercaderia;
        $mercaderia->Nombre = $request->Nombre;
        $mercaderia->Stock = $request->Stock;
        $mercaderia->Precio = $request->Precio;
        $mercaderia->save();

        return back()->with('mensaje', 'Producto ingresado.');
    }

    public function editar($idm){
        $mercaderia = App\Mercaderia::findOrFail($idm);

        return view('mercaderia.editar', ['mercaderia'=>$mercaderia]);
    }

    public function eliminar($idm){
        $mercaderia = App\Mercaderia::findOrFail($idm);
        $mercaderia->delete();

        return back()->with('mensaje', 'Producto eliminado');
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