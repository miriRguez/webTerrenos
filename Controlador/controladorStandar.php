<?php

abstract class controladorStandar{
	/**
	 * Verifica si el usuario ha iniciado sesión.
	 * @return bool Regresa True si ha iniciado sesión. False, en caso contrario.
	 */
	protected function estaLogeado(){
		if( isset($_SESSION['usuarioEmail']) )
			return true;
		return false;
	}

	/**
	 * Verifica que el usuario que ha iniciado sesión sea un administrador.
	 * @return bool Regresa True si el usuario que ha iniciado sesión es de tipo administrador.
	 * False, en caso de que no lo sea.
	 */
	protected function esAdmin(){
		if( isset($_SESSION['tipoUsuario']) && $_SESSION['nivelAcceso'] == '1' )
			return true;
		return false;
	}

	/**
	 * Verifica que el usuario que ha iniciado sesión sea un usuario común.
	 * @return bool Regresa True si el usuario que ha iniciado sesión es de tipo usuario.
	 * False, en caso de que no lo sea.
	 */
	protected function esUsuario(){
		if( isset($_SESSION['tipoUsuario']) && $_SESSION['nivelAcceso'] == '0' )
			return true;
		return false;
	}
}

?>