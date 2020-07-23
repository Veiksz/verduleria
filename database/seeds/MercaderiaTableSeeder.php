<?php

use Illuminate\Database\Seeder;
use App\Mercaderia;
use App\Bodega;
use App\Cliente;
use App\Vendedor;
use App\Distribuidor;
use App\Local;

class MercaderiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mercaderia::truncate();

        $mercaderia = new Mercaderia();
        $mercaderia->id_mercaderia = "1";
        $mercaderia->Nombre = "Manzana";
        $mercaderia->Stock = 50;
        $mercaderia->Precio = 1200;
        $mercaderia->save();

        $mercaderia = new Mercaderia();
        $mercaderia->id_mercaderia = "2";
        $mercaderia->Nombre = "Pera";
        $mercaderia->Stock = 30;
        $mercaderia->Precio = 1500;
        $mercaderia->save();

        Bodega::truncate();

        $bodega = new Bodega();
        $bodega->id_bodega = "1";
        $bodega->id_mercaderia = "2";
        $bodega->save();

        Cliente::truncate();

        $cliente = new Cliente();
        $cliente->rutC = "111-1";
        $cliente->nombre = "Claudia";
        $cliente->apellido = "Rosales";
        $cliente->save();

        $cliente = new Cliente();
        $cliente->rutC = "222-2";
        $cliente->nombre = "Alfredo";
        $cliente->apellido = "Castro";
        $cliente->save();

        Vendedor::truncate();

        $vendedor = new Vendedor();
        $vendedor->rutV = "333-3";
        $vendedor->nombre = "Maria";
        $vendedor->apellido = "Plaza";
        $vendedor->save();

        Distribuidor::truncate();

        $distribuidor = new Distribuidor();
        $distribuidor->rutD = "444-4";
        $distribuidor->razonSocial = "Vendedors S.A.";
        $distribuidor->direccion = "Ficticia #231";
        $distribuidor->save();

        Local::truncate();

        $local = new Local();
        $local->id_local = "1";
        $local->direccion = "Ficticia #2998";
        $local->id_bodega = "1";
        $local->id_cliente = "1";
        $local->id_trabajador = "1";
        $local->id_distribuidor = "1";
        $local->save();
    }
}
