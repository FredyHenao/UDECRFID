<?php

namespace App\Container\Users\Src;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

/**
 *
 */
use App\Container\Permissions\Src\Role;
use App\Container\Indicators\src\Indicator;
use Illuminate\Support\Facades\Storage;


class User extends Authenticatable implements AuditableContract
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
    protected $table = 'users';

    use Notifiable, SoftDeletes, Auditable;

    /**
     * Informamos a la clase EntrustUserTrait que usara restore
     */
    use EntrustUserTrait {
        EntrustUserTrait::restore insteadof SoftDeletes;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'birthday',
        'identity_type',
        'identity_no',
        'identity_expe_place',
        'identity_expe_date',
        'address',
        'sexo',
        'phone',
        'email',
        'state',
        'password',
        'cities_id',
        'countries_id',
        'regions_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['full_name', 'profile_picture'];

    public function getImageAttribute()
    {
        $img = isset( $this->images[0]->url ) ? $this->images[0]->url : '';
        if (strcmp(substr($img, 0, 4), 'data') !== 0 && Storage::disk('developer')->has('avatars', $img)) {
            $img = Storage::disk('developer')->url($img);
        }
        return $img;
    }

    public function getRoleAttribute()
    {
        $role_id = $this->roles()->first()->pivot->role_id;
        return Role::find($role_id)->display_name;
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->lastname;
    }

    /**
     * The channels the user receives notification broadcasts on.
     *
     * @return string
     */
    public function receivesBroadcastNotificationsOn()
    {
        return 'users-notification.' . $this->id;
    }

    public function getNumStatusReadNotificationsAttribute()
    {
        return count($this->unreadNotifications);
    }

    /**
     * Get the user that owns the city.
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'cities_id');
    }

    /**
     * Get the user that owns the country.
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'countries_id');
    }

    /**
     * Get the user that owns the region.
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'regions_id');
    }

    /*
     * morphMany() Identifica que existe relacion polimorfica
     * Parametros(Entidad de comentarios, Metodo en la entidad de comentario)
     * */
    public function images()
    {
        //seoble, likeable, votable....
        return $this->morphMany(Image::class, 'imageble');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function getProfilePictureAttribute()
    {
        if (isset($this->images[0]->url)) {
            if (filter_var($this->images[0]->url, FILTER_VALIDATE_URL) && file_exists($this->images[0]->url)) {
                return $this->images[0]->url;
            }

            if (Storage::disk('developer')->exists($this->images[0]->url)) {
                return Storage::disk('developer')->url($this->images[0]->url);
            }
        }

        return substr(md5($this->full_name), 16);
    }


    /**
     *
     */

    /**
     * The users that belong to the role.
     */
    public function indicators()
    {
        return $this->belongsToMany(Indicator::class);
    }

    /* Traemos la ruta de la imagen */
    public function getUrlImagen()
    {
      if(!empty($this->images[0])){
        return $this->images[0]->url;
      }else{
        return null;
      }
    }

    public function programa()
    {
      return $this->belongsTo('App\Programa', 'FK_ProgramaId', 'PK_IdProgramas')->withDefault(
        ['PR_Nombre' => null]
      );
    }

  public function getPrograma()
  {
    $programa = $this->programa->PR_Nombre;
    $programa = explode(' ', $programa);
    $aux = 0;
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
