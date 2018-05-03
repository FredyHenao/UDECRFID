<?php

namespace App\Container\Users\src;

use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
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
    protected $table = 'TBL_Recursos';
    protected $primaryKey = 'PK_IdRecurso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'RE_Nombre','RE_Cantidad',
    ];

    public function areas(){
        return $this->hasMany(Area::class,'FK_AreasId');
    }

    public function controles(){
        return $this->belongsTo(Controles::class,'FK_RecursoId');
    }
}
