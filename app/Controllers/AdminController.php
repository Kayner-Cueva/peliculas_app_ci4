<?php

namespace App\Controllers;


class AdminController extends BaseController
{
	public function admin(): string
	{
		// Página principal del sistema principal
		$Estructura = view("Admin/dashboard");
		return $Estructura;
	}

	public function contacto(): string
	{
		$Estructura = view("Admin/contacto");
		return $Estructura;
	}


}