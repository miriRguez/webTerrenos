<?php

class manzanaModelo {
    private $idManzana;
    private $numero;
    private $idPredio;

    function insertar($numero, $idPredio)
    {
        $this->numero = $numero;
        $this->idPredio = $idPredio;

        $query = "INSERT INTO `Manzana`( `numero`, `predioId`) VALUES ('$numero','$idPredio')";
        $result = $this->bd_driver->query($query);

        return $result;
    }

    function modificar($idManzana)
    {
    }

    function eliminar($idManzana)
    {
    }
}

?>