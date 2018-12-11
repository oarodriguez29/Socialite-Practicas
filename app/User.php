<?php

namespace Socialite;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // Funcion para la Relacion entre User-Roles.
    public function roles()
    {
        return $this->belongsToMany('Socialite\Role');
    }
    // Autorizacion de usuarios con rol.
    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta Accion No Esta Autorizada.');
    }
    // Validacion en caso de ser varios roles o arreglo de roles para un user.
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    // Valido si el Usuario tiene Rol ò si Esta Relacionado a un Rol.
    public function hasRole($role)
    {
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

