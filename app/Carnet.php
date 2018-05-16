<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    protected $connection = 'carnet';
    public    $table = 'TBL_Carnet';
}
