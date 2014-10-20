<?php

class pagoModelo
{
	private $monto;
	private $fechaPago;
	private $fechaCorte;
	private $tipoPago;
	private $pagoActual;
	private $statusPago;
	private $ventaId;

	function insertar($monto,$fechaPago,$fechaCorte,$tipoPago,$pagoActual,$statusPago,$ventaId)
	{
		$this->monto = $monto;
		$this->fechaPago = $fechaPago;
		$this->fechaCorte = $fechaCorte;
		$this->tipoPago = $tipoPago;
		$this->pagoActual = $pagoActual;
		$this->statusPago = $statusPago;
		$this->ventaId = $ventaId;

		return true;
	}

	function modificar($clienteId)
	{

	}

	function eliminar($clienteId)
	{

	}

	function traspaso($clienteIdDueño,$clienteIdNuevoDueño)
	{

	}
}

?>