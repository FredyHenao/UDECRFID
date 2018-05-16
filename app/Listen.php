<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listen extends Model
{
    protected $table = 'TBL_Listen';

    public function scopeActivos($query)
    {
      // Activos
      return $query->where('FK_UsuarioId', null);
    }
}
