<?php

class clienteModelo{

	private $clienteId;
	private $nombre;
	private $apellidoP;
	private $apellidoM;
	private $calle;
	private $numeroInt;
	private $numeroExt;
	private $colonia;
	private $cp;
	private $municipio;
	private $fechaNac;
	private $sexo;
	private $estado;
	private $nacionalidad;
	private $estadoCivil;
	private $oficio;
	private $cdOrigen;
	private $municipioOrigen;
	private $rfc;

	function insertar($clienteId,$nombre,$apellidoP,$apellidoM,$calle,$numeroInt,$numeroExt,$colonia,
					$cp,$municipio,$fechaNac,$sexo,$estado,$nacionalidad,$estadoCivil,$oficio,
					$cdOrigen,$municipioOrigen,$rfc){

		$this->clienteId = $clienteId;
		$this->nombre = $nombre;
		$this->apellidoP = $apellidoP;
		$this->apellidoM = $apellidoM;
		$this->calle = $calle;
		$this->numeroInt = $numeroInt;
		$this->numeroExt = $numeroExt;
		$this->colonia = $colonia;
		$this->cp = $cp;
		$this->municipio = $municipio;
		$this->fechaNac = $fechaNac;
		$this->sexo = $sexo;
		$this->estado = $estado;
		$this->nacionalidad = $nacionalidad;
		$this->estadoCivil= $estadoCivil;
		$this->oficio = $oficio;
		$this->cdOrigen = $cdOrigen;
		$this->municipioOrigen = $municipioOrigen;
		$this->rfc = $rfc;

		return TRUE;


	}

	function modificar($clienteId){

	}

	function eliminar($clienteId){

	}


}

?>