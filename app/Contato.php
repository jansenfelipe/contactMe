<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    /*
     * Belongs to Categoria
     */
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
