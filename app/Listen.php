<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listen extends Model
{
    protected $table = 'tbl_listen';

    public function scopeActivos($query)
    {
      // Activos
      return $query->where('FK_UsuarioId', null);
    }
}
