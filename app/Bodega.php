<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $primaryKey = 'idb';

    public function mercaderia(){
        return $this->belongsTo(Mercaderia::class);
    }
}
