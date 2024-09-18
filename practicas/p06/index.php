<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <?php
        include 'src/funciones.php';
    ?>

    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
    <?php
    if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
        } ej01($num);
    ?>

    <h2>Ejercicio 2</h2>
    <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
    secuencia compuesta por: impar, par, impar.</p>
    <p>Por ejemplo:</p>
    <p>990, 382, 786</p>
    <p>422, 361, 473</p>
    <p>392, 671, 914</p>
    <p><b>213, 744, 911</b></p>
    <p>Estos números deben almacenarse en una matriz de Mx3, donde M es el número de filas y
    3 el número de columnas. <br> Al final muestra el número de iteraciones y la cantidad de
    números generados:</p>
    <?php
        ej02();
    ?>

    <h2>Ejercicio 3</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.</p>
    <ul>
        <li>Crear una variante de este script utilizando el ciclo do-while.</li>
        <li>El número dado se debe obtener vía GET.</li>
    </ul>
    <?php
    if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
        } ej03($num);
    ?>

</body>
</html>