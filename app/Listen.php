<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Listen extends Model
{
    protected $table = 'TBL_Listen';
    protected $primaryKey = 'PK_IdListen';

    /* Lista los codigos que se encuentran activos para el usuario que ha iniciado sesion */
    public function scopeActivos($query)
    {
      // Activos
      return $query->where('FK_UsuarioId', Auth::user()->id);
    }
}
