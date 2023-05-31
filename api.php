<?php
$operacion = $_POST['operacion']; // Operación matemática
$resultado = null; // Variable para almacenar el resultado de la operación

// Eliminar espacios en blanco
$operacion = str_replace(' ', '', $operacion);

// Validar caracteres permitidos
if (!preg_match('/^[0-9+\-*/]+$/', $operacion)) {
    eval("\$resultado = $operacion;");
}else{
    echo "Operación matemática inválida";
}


echo "Resultado: " . $resultado;

?>