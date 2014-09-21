<?php

class empleadoControlador{
	private $modelo;

	function __construct(){
		require('Modelo/empleadoModelo.php');
		$this->modelo = new empleadoModelo();
	}


	function run(){
		switch ($_REQUEST['accion']) {
			case 'insertar':
				$this->insertar();

				break;
			case 'modificar':
				$this->modificar();
				break;

			case 'eliminar':
				$this->eliminar();
				break;


			default:
				break;
			;
		} // switch

	}

	function insertar(){
		require('/funciones.php');

		$validar = new validar();

		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		$apellidoP =  $validar->validarNombre($_REQUEST['apellidoP']);
		$apellidoM =  $validar->validarNombre($_REQUEST['apellidoM']);
		$calle = $validar-> validarCadena($_REQUEST['calle']);
		$numeroInt = $validar->validarNumero($_REQUEST['numeroInt']);
		$numeroExt = $validar->validarNumero($_REQUEST['numeroExt']);
		$colonia = $validar->validarCadena($_REQUEST['colonia']);
		$cp = $validar->validarCP($_REQUEST['cp']);
		$municipio = $validar->validarCadena($_REQUEST['municipio']);
		$fechaNac = $validar->validarFecha($_REQUEST['fechaNac']);
		$sexo = $validar->validarSexo($_REQUEST['sexo']);
		$nss = $vaidar->validarNSS($_REQUEST['nss']);
		$rfc = $validar->validarRFC($_REQUEST['rfc']);

		$resultado = $this->modelo->insertar($nombre,$apellidoP,$apellidoM,$calle,$numeroInt,$numeroExt,$colonia,$cp,
											$municipio,$fechaNac,$sexo,$nacionalidad,$estado,$estadoCivil,$nss,$rfc);

		if ($resultado)
		{
			require('/Vista/empleadoInsertado.html');
		}
		else
		{
			require('/Vista/Error.html');
		}

	}

	function modificar($empleadoId){

	}

	function eliminar($empleadoId){

	}
}

?>