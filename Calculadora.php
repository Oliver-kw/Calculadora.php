<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div class="">
        <h2>Calculadora</h2>
        <div class="">
<form action="code.php" method="post">
        </div>
        <div class="">
            <label for="">Numero1</label>
            <input type="text" name="Numero1">
        </div>
        <div class="">
            <label for="">Numero2</label>
            <input type="text" name="Numero2">
        </div>
        
        <div class="">
            <label>Operación:</label><br>
            <input type="radio" name="ope" value="sumar" checked> Suma<br>
            <input type="radio" name="ope" value="restar"> Resta<br>
            <input type="radio" name="ope" value="multiplicar"> Multiplicacion<br>
            <input type="radio" name="ope" value="dividir"> Dividir<br>
        </div>
        
        <button type="submit">Calcular</button>

</form>
    </div>
</body>
</html>