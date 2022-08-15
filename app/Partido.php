<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    //
    protected $table ='partidos';
     protected $fillable = [
        'fecha',
        'hora',
        'competencia',
        'marcador',
        'goles_favor',
        'goles_encontra',
        'tiros',
        'tiros_arco',
        'posesion_balon',
        'pases',
        'faltas',
        'tarjeta_amarilla',
        'tarjeta_roja',
        'fuera_juego',
        'tiro_esquina',
        //victoria - derrota - empate
        'resultado',
        'rival'
     ];
     public function gols(){
      return $this->hasMany(Gol::class, 'id_partido', 'id' );
     }
}
