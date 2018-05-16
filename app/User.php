<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class User extends Model
{

  public function programa()
  {
    return $this->belongsTo('App\Programa', 'FK_ProgramaId', 'PK_IdProgramas')->withDefault(
      ['PR_Nombre' => null]
    );
  }

  public function listen()
  {
    return $this->hasOne('App\Listen', 'FK_UsuarioId', 'id');
  }

  public function image()
  {
    return $this->morphOne(Image::class, 'imageble');
  }

  public function getPrograma()
  {
    $programa = $this->programa->PR_Nombre;
    $programa = explode(' ', $programa);
    $aux = 0;
    $datos = '';
    $first = '';
    $last = '';
    foreach ($programa as $prom){
      if($aux == 0){
        $first = $prom;
      }else{
        $last .= $prom . ' ';
      }
      $aux = 1;
    }
    return array(
      'primero' => $first,
      'ultimo' => $last
    );
  }

}
