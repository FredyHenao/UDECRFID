<?php

namespace App\Container\Users\src;

use Illuminate\Database\Eloquent\Model;

class Controles extends Model
{
    /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'developer';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'TBL_Controles';
    protected $primaryKey = 'PK_IdControl';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CO_Estado',
    ];

    public function recursos(){
        return $this->hasMany(Recursos::class,'FK_RecursoId');
    }

    public function usuarios(){
        return $this->hasMany(User::class,'FK_UsuarioId');
    }
}
