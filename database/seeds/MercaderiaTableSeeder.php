<?php

use Illuminate\Database\Seeder;
use App\Mercaderia;
use App\Bodega;

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
    }
}
