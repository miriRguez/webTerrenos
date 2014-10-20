<?php

class ventaControlador
{
	private $modelo;

	function __construct()
	{
		require('/Modelo/ventaModelo.php');
		$this->modelo = new ventaModelo();
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
		    case 'restructuracion':
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

		$tipoPago = $validar->validarCadena($_REQUEST['tipoPago']);
		$monto = $validar->validarNumero($_REQUEST['monto']);
		$mensualidad = $validar->validarNumero($_REQUEST['mensualidad']);
		$fechaCompra = $validar->validarFecha($_REQUEST['fechaCompra']);
		$fechaCorte = $validar->validarFecha($_REQUEST['fechaCorte']);
		$statusVenta = $validar->validarCadena($_REQUEST['statusVenta']);

		$resultado = $this->modelo->insertar($tipoPago,$monto, $mensualidad, $fechaCompra,$fechaCorte ,$statusVenta);

		if($resultado)
		{

			$query = "INSERT INTO `Venta`(`tipoPago`, `precioTerreno`, `mensualidad`, `fechaCompra`, `fechaCorte`, `statusVenta`, `clienteId`)
										 VALUES ('$tipoPago','$monto', '$mensualidad', '$fechaCompra','$fechaCorte' ,'$statusVenta')";
			$result = $this->bd_driver->query($query);

			require('/Vista/ventaInsertada.html');
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