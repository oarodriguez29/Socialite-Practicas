<?php

namespace Socialite;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
	protected $fillable =
	[
		'nam_img', // Nombre
		'avatar', // Avatar
		'description', // Descripcion
		'slug' // Slug
	];
	protected $primaryKey = 'id';
	protected $table = 'imagens';
}
