<?php

abstract class controladorStandar {
    /**
     * Verifica si el usuario ha iniciado sesi�n.
     *
     * @return bool Regresa True si ha iniciado sesi�n. False, en caso contrario.
     */
    protected function estaLogeado()
    {
    	if (isset($_SESSION['usuarioEmail'])){
    		    return true;
    	}else{
    			 return false;
    	}


    }

    /**
     * Verifica que el usuario que ha iniciado sesi�n sea un administrador.
     *
     * @return bool Regresa True si el usuario que ha iniciado sesi�n es de tipo administrador.
     * False, en caso de que no lo sea.
     */
    protected function esAdmin()
    {
    	if (isset($_SESSION['tipoUsuario']) && $_SESSION['nivelAcceso'] == '1'){
    	   return true;
    	}else{
    	 	return false;
    	}


    }

    /**
     * Verifica que el usuario que ha iniciado sesi�n sea un usuario com�n.
     *
     * @return bool Regresa True si el usuario que ha iniciado sesi�n es de tipo usuario.
     * False, en caso de que no lo sea.
     */
    protected function esUsuario()
    {
    	if (isset($_SESSION['tipoUsuario']) && $_SESSION['nivelAcceso'] == '0'){
    		 return true;
    	}else{
    	 	return false;
    	}


    }

	/**
	 * Crea una vista segun solicite el controlador
	 *
	 * @$data es el contenido que llevar� la vista
	 * @echo despliega la vista con el pie de pagina y encabedo
	 * False, en caso de que no lo sea.
	 */
    protected function crearVista($data)
    {
        $cabecera = file_get_contents('./Vista/cabecera.html');
        $pie = file_get_contents('./Vista/pie.html');

        $vista = $cabecera.$data.$pie;
        echo $vista;
    }
	/**
	 * Crea una vista listando
	 *
	 * @$data es el contenido que llevar� la vista
	 * @echo despliega la vista con el pie de pagina y encabedo
	 * False, en caso de que no lo sea.
	 */

	protected function crearLista($data)
	{
		$cabecera = file_get_contents('./Vista/cabecera.html');
		$pie = file_get_contents('./Vista/pie.html');


		$vista = $cabecera.$data['contenido'].$pie;
	//	$vista = strtr($view, $dictionary);
		echo $vista;
	}
}

?>