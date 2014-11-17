<?php

require('controladorStandar.php');

class sesionControlador extends controladorStandar {
    private $modelo;

    function __construct()
    {
        require('Modelo/sesionModelo.php');
        $this->modelo = new sesionModelo();

    }

    function run()
    {
        if (isset($_REQUEST['accion'])) {
            switch ($_REQUEST['accion']) {
                case 'iniciar':

                	  $this->iniciarSesion();
                   /* if (!$this->estaLogeado()) {
                        $this->iniciarSesion();
                    }*/

                    break;

                case 'cerrar';
                    if ($this->estaLogeado()) {
                        $this->cerrarSesion();
                    }
                    break;
                default:
                    require('./Vista/Error.html');
            } // switch
        } else {
        	$inicio = file_get_contents('./Vista/login.html');
        	$this->crearVista($inicio);
        }
    }

    function iniciarSesion()
    {
        require('funciones.php');
        $validar = new validar();
        // require('Vista/login.html');

        $usuarioEmail = $validar->validarEmail($_REQUEST['usuarioEmail']);
        $password = $validar->validarCadena($_REQUEST['password']);

        $resultado = $this->modelo->iniciarSesion($usuarioEmail, $password);

        if ($resultado) {

            $_SESSION['usuarioEmail'] = $usuarioEmail;

        	$inicio = file_get_contents('./Vista/indexAlternativo.html');
        	$this->crearVista($inicio);

        } else {
            header('Location:Vista/Error.html');
        }
    }

    function cerrarSesion()
    {
        if (!isset($_SESSION['usuarioEmail'])) {
            die("No hay ninguna sesion iniciada");
            // esto ocurre cuando la sesion caduca.
        }else {
            $terminar = $this->modelo->cerrarSesion();
            if ($terminar) {
            	$inicio = file_get_contents('./Vista/login.html');
            	$this->crearVista($inicio);
            }
        }
    }
}

?>