<?php

class clienteControlador{
  	private $modelo;


	function __construct(){
		require('Modelo/clienteModelo.php');
		require('config.inc');
		$this->bd_driver = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAM);

		if ($this->bd_driver->connect_errno){
			printf("conexion fallida %s/n",mysql_connect_error());
			exit();
		}


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
			require('funciones.php');

			$validar = new validar();

			$clienteId = $validar->validarNumero($_REQUEST['clienteId']);
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

			$resultado = $this->modelo->insertar($clienteId,$nombre,$apellidoP,$apellidoM,$calle,$numeroInt,$numeroExt,$colonia,$cp,
												$municipio,$fechaNac,$sexo,$nacionalidad,$estado,$estadoCivil,$oficio,
												$cdOrigen,$estadoOrigen,$municipioOrigen,$rfc);

			if ($resultado) {
				$query = "INSERT INTO `Cliente`(`clienteId`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `calle`, `numeroInterior`,
												 `numeroExterior`, `colonia`, `cp`, `municipio`, `fechaNacimiento`, `sexo`, `nacionalidad`,
												  `estado`, `estadoCivil`, `oficio`, `ciudadOrigen`, `municipioOrigen`, `estadoOrigen`, `rfc`)
												  VALUES ('$clienteId','$nombre','$apellidoP','$apellidoM','$calle','$numeroInt','$numeroExt',
												  '$colonia','$cp','$municipio','$fechaNac','$sexo','$nacionalidad','$estado','$estadoCivil',
												  '$oficio','$cdOrigen','$municipioOrigen','$estadoOrigen','$rfc')";
				$result = $this->bd_driver->query($query);

				if ($this->bd_driver->error) {
					echo "error en query";
					require('Vista/Error.html');
				}else{
					require('Vista/clienteInsertado.html');
				}

			}else{
				echo "error en datos";
				require('Vista/Error.html');
			}
		}

	function modificar(){

	}

	function eliminar(){

	}
}

?>