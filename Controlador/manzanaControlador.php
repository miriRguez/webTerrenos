<?php


require('controladorStandar.php');
class manzanaControlador extends controladorStandar{

	private $modelo;
	private $bd_driver;

	function __construct(){
		require('Modelo/manzanaModelo.php');
		require('BD.php');
		require('config.inc');

			$this->modelo = new manzanaModelo();

		$this->bd_driver = BD::getInstancia();




	/*	$this->bd_driver = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

		if ($this->bd_driver->connect_errno){
			printf("conexion fallida %s/n",mysql_connect_error());
			exit();
		}*/



	}


	function run(){
		switch ($_REQUEST['accion']) {
			case 'insertar':
				if($this->estaLogeado() && $this->esAdmin() ) {
					$this->insertar();
				}else{
					if(!$this->estaLogeado()){
						header('Location: index.php?ctrl=login&accion=iniciarSesion');
					}else{
						require('view/errorAcceso.php');
					}
				}

				break;

			case 'modificar':
				$this->modificar();
				break;
			case 'eliminar':
				$this->eliminar();
				break;
			case 'listar':
				$this->listar();


			default:
				break;
			;
		} // switch
	}

	function insertar(){
		require('funciones.php');
		$validar = new validar();

		if (isset($_POST['numero'])) {
			$numero = $validar->validarNumero($_POST['numero']);
		}
		if (isset($_POST['idPredio'])) {
			$idPredio = $validar->validarNumero($_REQUEST['idPredio']);
		}

	//hacemo la validacion de que exista el id del predio

		$resultado = $this->modelo->insertar($numero,$idPredio);

		if ($resultado) {


			if ($this->bd_driver->error) {
				echo "error en query ";
				require('Vista/Error.html');
			}else{
				require('Vista/manzanaInsertada.html');
			}

		}else{
			require('Vista/Error.html');
		}
	}

		function modificar($idManzana){

		}

		function eliminar($idManzana){

		}

		function listar($idPredio){
		//	$query =

		}


}

?>