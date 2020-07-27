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

    // Controlador MERCADERIA

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

    public function EditarMercaderia($idm){
        $mercaderia = App\Mercaderia::findOrFail($idm);

        return view('mercaderia.editar', ['mercaderia'=>$mercaderia]);
    }

    public function ModificarMercaderia(Request $request, $idm){
        $mercaderia = App\Mercaderia::findOrFail($idm);
        $mercaderia->Nombre = $request->Nombre;
        $mercaderia->Stock = $request->Stock;
        $mercaderia->Precio = $request->Precio;
        $mercaderia->save();

        return back()->with('mensaje', 'Producto actualizado');
    }

    public function EliminarMercaderia($idm){
        $mercaderia = App\Mercaderia::findOrFail($idm);
        $mercaderia->delete();

        return back()->with('mensaje', 'Producto eliminado');
    }

    // Controlador CLIENTE

    public function clientes(){
        $cliente = App\Cliente::all();
        return view('clientes', compact('cliente'));
    }

    public function CrearCliente(Request $request){
        //return $request->all();

        $request->validate([
            'rutC' => 'required',
            'Nombre' => 'required',
            'Apellido' => 'required'
        ]);

        $cliente = new App\Cliente;
        $cliente->rutC = $request->rutC;
        $cliente->Nombre = $request->Nombre;
        $cliente->Apellido = $request->Apellido;
        $cliente->save();

        return back()->with('mensaje', 'Cliente ingresado.');
    }

    public function EditarCliente($rutC){
        $cliente = App\Cliente::findOrFail($rutC);

        return view('cliente.editar', ['cliente'=>$cliente]);
    }

    public function ModificarCliente(Request $request, $rutC){
        $cliente = App\Cliente::findOrFail($rutC);
        $cliente->Nombre = $request->Nombre;
        $cliente->Apellido = $request->Apellido;
        $cliente->save();

        return back()->with('mensaje', 'Cliente actualizado');
    }

    public function EliminarCliente($rutC){
        $cliente = App\Cliente::findOrFail($rutC);
        $cliente->delete();

        return back()->with('mensaje', 'Cliente eliminado');
    }

    // Controlador VENDEDOR

    public function vendedor(){
        $vendedor = App\Vendedor::all();
        return view('trabajador', compact('vendedor'));
    }

    public function CrearVendedor(Request $request){
        //return $request->all();

        $request->validate([
            'rutV' => 'required',
            'Nombre' => 'required',
            'Apellido' => 'required'
        ]);

        $vendedor = new App\Vendedor;
        $vendedor->rutV = $request->rutV;
        $vendedor->Nombre = $request->Nombre;
        $vendedor->Apellido = $request->Apellido;
        $vendedor->save();

        return back()->with('mensaje', 'Vendedor ingresado.');
    }

    public function EditarVendedor($rutV){
        $vendedor = App\Vendedor::findOrFail($rutV);

        return view('vendedor.editar', ['vendedor'=>$vendedor]);
    }

    public function ModificarVendedor(Request $request, $rutV){
        $vendedor = App\Vendedor::findOrFail($rutV);
        $vendedor->Nombre = $request->Nombre;
        $vendedor->Apellido = $request->Apellido;
        $vendedor->save();

        return back()->with('mensaje', 'Vendedor actualizado');
    }

    public function EliminarVendedor($rutV){
        $vendedor = App\Vendedor::findOrFail($rutV);
        $vendedor->delete();

        return back()->with('mensaje', 'Vendedor eliminado');
    }

    // Controlador DISTRIBUIDOR

    public function distribuidor(){
        $distribuidor = App\Distribuidor::all();
        return view('distribuidor', compact('distribuidor'));
    }

    public function CrearDistribuidor(Request $request){
        //return $request->all();

        $request->validate([
            'rutD' => 'required',
            'razonSocial' => 'required',
            'Direccion' => 'required'
        ]);

        $distribuidor = new App\Distribuidor;
        $distribuidor->rutD = $request->rutD;
        $distribuidor->razonSocial = $request->razonSocial;
        $distribuidor->Direccion = $request->Direccion;
        $distribuidor->save();

        return back()->with('mensaje', 'Distribuidor ingresado.');
    }

    public function EditarDistribuidor($rutD){
        $distribuidor = App\Distribuidor::findOrFail($rutD);

        return view('distribuidor.editar', ['distribuidor'=>$distribuidor]);
    }

    public function ModificarDistribuidor(Request $request, $rutD){
        $distribuidor = App\Distribuidor::findOrFail($rutD);
        $distribuidor->razonSocial = $request->razonSocial;
        $distribuidor->Direccion = $request->Direccion;
        $distribuidor->save();

        return back()->with('mensaje', 'Distribuidor actualizado');
    }

    public function EliminarDistribuidor($rutD){
        $distribuidor = App\Distribuidor::findOrFail($rutD);
        $distribuidor->delete();

        return back()->with('mensaje', 'Distribuidor eliminado');
    }
}