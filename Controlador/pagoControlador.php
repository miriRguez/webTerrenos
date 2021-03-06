<?php

class pagoControlador
{
	private $modelo;

	function __construct()
	{
		require('/Modelo/pagoModelo.php');
		$this->modelo = new pagoModelo();
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
			case 'traspaso':
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
		$fechaCorte = $validar->validarFecha($_REQUEST['fechaCorte']);
		$tipoPago = $validar->validarCadena($_REQUEST['tipoPago']);
		$pagoActual = $validar->validarNumero($_REQUEST['pagoActual']);
		$statusPago = $validar->validarNumero($_REQUEST['statusMora']);
		$ventaId = $validar->validarNumero($_REQUEST['ventaId']);

		$resultado = $this->modelo->insertar($monto,$fechaMora,$fechaCorte,$tipoPago,$pagoActual,$statusPago,$ventaId);

		if($resultado)
		{
			$query = "INSERT INTO `Pago`(`montoPagado`, `fechaPago`, `fechaCorte`, `tipoPago`, `pagoActual`,
										 `statusPago`, `ventaId`)
								 VALUES ('$monto','$fechaMora','$fechaCorte,''$tipoPago','$pagoActual','$statusPago','$ventaId')";
			$result = $this->bd_driver->query($query);
			require('/Vista/pagoInsertado.html');
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
}

?>