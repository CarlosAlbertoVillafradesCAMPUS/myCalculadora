<?php
    $operacion = $_POST['operacion'];
    $resultado = null;

    //eliminar espacios al principio y al final de la operacion
    $operacion = trim($operacion);
    try {
        if (!preg_match('/^[0-9+\-*/^]+$/', $operacion)) {
            $operacion = str_replace('^', '**', $operacion);
            $resultado = eval("return $operacion;");
        }
    } catch (\Throwable $th) {
        echo "ERROR!! Operación matemática inválida: $operacion!";
    }

    if (!is_null($resultado)) {
        echo "el Resultado de la operacion ($operacion) es: " . $resultado;
    }
        
    
?>