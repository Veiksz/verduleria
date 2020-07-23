<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    public function mercaderia(){
        return $this->belongsTo(Mercaderia::class);
    }
}
