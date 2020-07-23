<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    public function bodega(){
        return $this->belongsTo(Bodega::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    
    public function trabajador(){
        return $this->belongsTo(Trabajador::class);
    }

    public function distribuidor(){
        return $this->belongsTo(Distribuidor::class);
    }
}
