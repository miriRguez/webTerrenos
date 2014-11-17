<?php
require('controladorStandar.php');

class predioControlador extends controladorStandar {
	private $modelo;

	function __construct()
	{
		require('Modelo/predioModelo.php');
		$this->modelo = new predioModelo();

	}
	function run(){
		switch ($_REQUEST['accion']) {
			case 'insertar':
					$this->insertar();
				/*
				if($this->estaLogeado() && $this->esAdmin() ) {
					$this->insertar();
				}else{
					if(!$this->estaLogeado()){
						header('Location: index.php?ctrl=login&accion=iniciarSesion');
					}else{
						require('view/errorAcceso.php');
					}
				}*/

				break;

			case 'modificar':
				$this->modificar();
				break;
			case 'eliminar':
				$this->eliminar();
				break;
			case 'listar':
				$this->listar();
				break;
			default:
				break;
			;
		} // switch
	}
	function insertar(){
		require('funciones.php');
		$validar = new validar();
		$nombre = $validar->validarNombre($_REQUEST['nombre']);
		$municipio = $validar->validarNombre($_REQUEST['municipio']);
		$colonia = $validar->validarNombre($_REQUEST['colonia']);

		$resultado = $this->modelo->insertar($nombre,$municipio ,$colonia);
		if ($resultado) {
				require('Vista/predioInsertado.html');
		}else{
			echo "error en datos";
			require('Vista/Error.html');
		}

	}

	function modificar($idPredio){

	}

	function eliminar($idPredio){

	}

	function listar(){
		$predios = $this->modelo->listar();

		$vista = file_get_contents("./Vista/predios.html");
		$inicio_fila = strrpos($vista,'<tr>');
		$final_fila = strrpos($vista,'</tr>') + 5;
		$fila = substr($vista,$inicio_fila,$final_fila-$inicio_fila);

		$filas = '';
		foreach ($predios as $row) {
			$new_fila = $fila;
			$diccionario = array(
				'{predioId}' => $row['predioId'],
				'{nombre}' => $row['nombre'],
				'{municipio}' => $row['municipio'],
				'{colonia}' => $row['colonia']);
			$new_fila = strtr($new_fila,$diccionario);
			$filas .= $new_fila;
		}

		$vista = str_replace($fila, $filas, $vista);
		$data = array(
					'contenido' => $vista
				);

		$this->crearLista($data);

	}
}



?>