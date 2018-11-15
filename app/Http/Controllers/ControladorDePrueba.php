<?php

namespace Socialite\Http\Controllers;

use Socialite\Http\Controllers\Controller;

/**
* 
*/
class ControladorDePrueba extends Controller
{
	
	function __construct()
	{
		
	}

	public function prueba() {
		return "Controlador de Pràctica en Laravel";
	}
}