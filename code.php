<?php
$Numero1 = $_POST['Numero1'] ?? 0;
$Numero2 = $_POST['Numero2'] ?? 0;

$numero1 = (int)$Numero1;
$numero2 = (int)$Numero2;

$operacion = $_POST['ope'] ?? 'sumar';

if ($operacion === 'sumar') {

    $resultado = $numero1 + $numero2;
} elseif ($operacion === 'restar') {

    $resultado = $numero1 - $numero2;
} elseif ($operacion === 'multiplicar') {

    $resultado = $numero1 * $numero2;
} elseif ($operacion === 'dividir') 
    if ($numero2 != 0) {

        $resultado = $numero1 / $numero2;
    } else {

        $resultado = 'Error: dividiendo por cero';
        $resultado = 'La operacion no es valida';
}

echo "El resultado es: " . $resultado;
?>




?>
<a href= "Calculadora.php"> Volver </a>