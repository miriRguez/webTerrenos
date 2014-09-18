<?php
//get query args

$ctrl;
switch ($_REQUEST['ctrl']) {
	case 'usuario':
		//crear y ejecutar el controlador
		require('Controlador/usuarioControlador.php');
		//crear objeto
		$ctrl = new UsuarioControlador();
		break;
	default:
		echo "ningun parametro!!";

} // switch

$ctrl->run();

?>