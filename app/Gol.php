<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    //
    protected $table = "gols";
        protected $fillable =[
            'autor',
            'minuto_juego',
            //Penal - Autogol - GOLAZO!
            'tipo_gol'
        ];
}
