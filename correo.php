<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Correo {
	private $direccion;
	private $asunto;
	private $cuerpo;

	/*
	   * @param string $dirccion
	   * @param string $asunto
	   * @param string $cuerpo
	*/
	function __construct($direccion, $asunto, $cuerpo) {
		$this->direccion = $direccion;
		$this->asunto = $asunto;
		$this->cuerpo = $cuerpo;
	}

	/**
	 * funcion para enviar el correo
	 */
	function send() {

		$cabecera = 'From: admin-noreply@dyscommx.mx' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($this->direccion, $this->asunto, $this->cuerpo, $cabecera);
		mail('admin-noreply@dyscommx.mx', $this->asunto, $this->cuerpo, $cabecera);
	}
}
?>