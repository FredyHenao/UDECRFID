<?php

namespace App\Container\Users\src;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
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
    protected $table = 'TBL_Areas';
    protected $primaryKey = 'PK_IdArea';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AR_Nombre',
    ];

    public function recursos(){
        return $this->belongsTo(Recursos::class,'FK_RecursoId');
    }
}
