<?php

class loteControlador{

	private $modelo;
	public $bd_driver;

	function __construct(){
		require('Modelo/loteModelo.php');
		require('config.inc');
		$this->bd_driver = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAM);

		if ($this->bd_driver->connect_errno){
			printf("conexion fallida %s/n",mysql_connect_error());
			exit();
		}

		$this->modelo = new loteModelo();
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
		$idLote =$validar->validarNumero($_REQUEST['idLote']);
		$colindanciaSur = $validar->validarCadena($_REQUEST['colindanciaSur']);
		$colindanciaNorte = $validar->validarCadena($_REQUEST['colindanciaNorte']);
		$colindanciaEste = $validar->validarCadena($_REQUEST['colindanciaEste']);
		$colindanciaOeste = $validar->validarCadena($_REQUEST['colindanciaOeste']);
		$medidaSur = $validar->validarNumero($_REQUEST['medidaSur']);
		$medidaNorte = $validar->validarNumero($_REQUEST['medidaNorte']);
		$medidaOeste = $validar->validarNumero($_REQUEST['medidaOeste']);
		$medidaEste = $validar->validarNumero($_REQUEST['medidaEste']);
		$idManzana =  $validar->validarNumero($_REQUEST['idManzana']);
	//	$idPredio = $validar->validarNumero($_REQUEST['idPredio']);

		$resultado = $this->modelo->insertar($idLote,$colindanciaSur,$colindanciaNorte,$colindanciaEste,$colindanciaOeste,
											$medidaSur,$medidaNorte,$medidaEste,$medidaOeste,$idManzana);

		if ($resultado) {
			$query = "INSERT INTO `Lote`(`loteId`, `colindanciaSur`, `colindanciaNorte`,
			 `colindanciaEste`, `colindanciaOeste`, `medidaSur`, `medidaNorte`, `medidaEste`,
			  `medidaOeste`,`manzanaId`) VALUES ('$idLote','$colindanciaSur','$colindanciaNorte','$colindanciaEste',
			  '$colindanciaOeste','$medidaSur','$medidaNorte','$medidaEste','$medidaOeste','$idManzana')";
			$result = $this->bd_driver->query($query);

			if ($this->bd_driver->error) {
				echo "eror query";
				require('Vista/Error.html');
			}else{
				require('Vista/loteInsertado.html');
			}

		}else{
			echo "error en datos";
			require('Vista/Error.html');
		}
	}

	function modificar($idLote){

	}

	function eliminar($idLote){

	}


}

?>