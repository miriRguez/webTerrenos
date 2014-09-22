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
	case 'cliente':
		require('Controlador/clienteControlador.php');
		$ctrl = new clienteControlador();
		break;
	case 'sesion':
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
		break;
	case 'pago':
		require('Controlador/pagoControlador.php');
		break;
	case 'mora':
		require('Controlador/moraControlador.php');
		break;

	default:
		echo "ningun parametro!!";

} // switch

$ctrl->run();

?>