<?php

namespace Socialite;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Funcion para la Relacion entre Rol-Users.
    public function users()
    {
    	return $this->belongsToMany('Socialite\User');
    }
}
