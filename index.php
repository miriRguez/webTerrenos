<?php

session_start();
$ctrl;


if (!isset($_REQUEST['ctrl'])) {
	require('Controlador/sesionControlador.php');
	$ctrl = new sesionControlador();
//	require('Controlador/sesionControlador.php');
}

if (!$_SESSION['usuarioEmail']) {
	header('Location:Vista/index.html');
}

switch ($_REQUEST['ctrl'])
{
	case 'usuario':
		//crear y ejecutar el controlador
		require('Controlador/usuarioControlador.php');
		//crear objeto
		$ctrl = new UsuarioControlador();
		break;
	case 'cliente':
		require('Controlador/clienteControlador.php');
		$ctrl = new clienteControlador();
		break;
	case 'iniciarSesion':
		require('Controlador/sesionControlador.php');
		$ctrl = new sesionControlador();
		break;
	case 'telefono':
		require('Controlador/telefonoControlador.php');
		$ctrl = new telefonoControlador();
		break;
	case 'empleado':
		require('Controlador/empleadoControlador.php');
		$ctrl = new empleadoControlador();
		break;
	case 'predio':
		require('Controlador/predioControlador.php');
		$ctrl = new predioControlador();
		break;
	case 'manzana':
		require('Controlador/manzanaControlador.php');
		$ctrl = new manzanaControlador();
		break;
	case 'lote':
		require('Controlador/loteControlador.php');
		$ctrl = new loteControlador();
		break;
	case 'venta':
		require('Controlador/ventaControlador.php');
		$ctrl = new ventaControlador();
		break;
	case 'pago':
		require('Controlador/pagoControlador.php');
		$ctrl = new pagoControlador();
		break;
	case 'mora':
		require('Controlador/moraControlador.php');
		$ctrl = new moraControlador();
		break;

	default:
		echo "ningun parametro!!";

} // switch

$ctrl->run();

?>