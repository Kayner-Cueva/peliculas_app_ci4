<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Home extends BaseController
{
	public function index(): string
	{
		// Página principal del sistema principal
		$Estructura = view('Estructura/Encabezado') . view('Client/index');
		return $Estructura;
	}

	public function login()
	{
		$request = \Config\Services::request();
		$UsuariosModel = new UsuariosModel();
		$usuario = $request->getGet('txtUsuario');
		$clave = $request->getGet('txtClave');
		// Realiza una consulta para buscar el usuario por nombre de usuario
		$usuarioData = $UsuariosModel->where('usuario', $usuario)->first();

		if ($usuarioData && password_verify($clave, $usuarioData['contrasena'])) {
			// Las contraseñas coinciden, inicia sesión

			$dataSession = [
				'id_usuario' => $usuarioData['id_usuario'],
				'usuario' => $usuarioData['usuario'],
				'nombre_completo' => $usuarioData['nombre_completo'],
				'rol' => $usuarioData['rol'],
				'login' => true,
			];

			$this->session->set($dataSession);

			// Redirige al usuario al inicio después de iniciar sesión correctamente
			if ($usuarioData['rol'] == 'admin') {
                // Si el usuario es un administrador, redirige al dashboard de administrador
                return redirect()->to(site_url('/admin'));
            } else {
                // Si el usuario es un cliente, redirige a la página principal de clientes
                return redirect()->to(site_url('ClienteController/index'));
            }
		} else {
			// Las credenciales no son válidas, muestra la página de inicio de sesión nuevamente
			return view('login/login.php');
		}
	}
}
