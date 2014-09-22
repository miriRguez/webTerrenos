<?php

class moraControlador
{
	private $modelo;

	function __construct()
	{
		require('/Modelo/moraModelo.php');
		$this->modelo = new moraModelo();
	}

	function run()
	{
		switch ($_REQUEST['accion'])
		{
			case 'insertar':
				;
				break;
			case 'modificar':
				;
				break;
			case 'eliminar':
				;
				break;

			default:
			;
		} // switch
	}//run

	function insertar()
	{
		require('/funciones.php');

		$validar = new validar();

		$monto = $validar->validarNumero($_REQUEST['monto']);
		$fechaPago = $validar->validarFecha($_REQUEST['fechaPago']);
		$mesMora = $validar->validarCadena($_REQUEST['mesMora']);
		$fechaMora = $validar->validarFecha($_REQUEST['fechaMora']);
		$statusMora = $validar->validarCadena($_REQUEST['statusMora']);

		$resultado = $this->modelo->insertar($monto,$fechaPago,$mesMora,$fechaMora,$statusMora);

		if($resultado)
		{
			require('/Vista/moraInsertada.html');
		}
		else
		{
			require('/Vista/Error.html');
		}
	}//fin insertar

	function modificar()
	{

	}

	function eliminar()
	{

	}

	function traspaso()
	{

	}

	function restructuracion()
	{

	}
}

?>