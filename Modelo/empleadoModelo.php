<?php
class empleadoModelo{

private $empleadoId;
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
private $nss;
private $rfc;

function insertar($empleadoId,$nombre,$apellidoP,$apellidoM,$calle,$numeroInt,$numeroExt,$colonia,
	$cp,$municipio,$fechaNac,$sexo,$nss,$rfc){

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
	$this->nss = $nss;
	$this->rfc = $rfc;

	return TRUE;


}

function modificar($empleadoId){

}

function eliminar($empleadoId){

}


?>