<?php

class clienteControlador{
  	private $modelo;

	function __construct(){
		require('Modelo/clienteModelo.php');
		$this->modelo = new clienteModelo();
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
			$nacionalidad = $validar->validarCadena($_REQUEST['nacionalidad']);
			$estado = $validar->validarCadena($_REQUEST['estado']);
			$estadoCivil = $validar->validarCadena($_REQUEST['estadoCivil']);
			$oficio = $validar->validarCadena($_REQUEST['oficio']);
			$cdOrigen = $validar->validarCadena($_REQUEST['cdOrigen']);
			$municipioOrigen = $validar->validarCadena($_REQUEST['municipioOrigen']);
			$estadoOrigen = $validar->validarCadena($_REQUEST['estadoOrigen']);
			$rfc = $validar->validarRFC($_REQUEST['rfc']);

			$resultado = $this->modelo->insertar($nombre,$apellidoP,$apellidoM,$calle,$numeroInt,$numeroExt,$colonia,$cp,
												$municipio,$fechaNac,$sexo,$nacionalidad,$estado,$estadoCivil,$oficio,
												$cdOrigen,$municipioOrigen,$rfc);

			if ($resultado)
			{
				require('/Vista/clienteInsertado.html');
			}
			else
			{
				require('/Vista/Error.html');
			}

		}

	function modificar(){

	}

	function eliminar(){

	}
}

?>