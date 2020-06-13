<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function unidadDeMedida(){
        return $this->belongsTo(UnidadDeMedida::class,'u_medida_id');
    }
}
