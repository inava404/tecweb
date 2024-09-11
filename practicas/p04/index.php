<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';
    ?>

<hr>
<h2>Ejercicio 2</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <p>$a = “ManejadorSQL”;</p>
    <p>$b = 'MySQL’;</p>
    <p>$c = &$a;</p>
    <?php
        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;
    ?>

    <br>
    <p>a. Ahora muestra el contenido de cada variable</p>
    <?php
        echo "<li>$a</li><br>";
        echo "<li>$b</li><br>";
        echo "<li>$c</li>";
    ?>

    <br>
    <p>b. Agrega al código actual las siguientes asignaciones:</p>
    <p>$a = “PHP server”;</p>
    <p>$b = &$a;</p>
    <?php
        $a = "PHP server";
        $b = '&$a';
    ?>

    <br>
    <p>c. Vuelve a mostrar el contenido de cada uno</p>
    <?php
        echo "<li>$a</li><br>";
        echo "<li>$b</li>";
    ?>

    <p>d. Describe y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones</p>
        <?php
            echo '<li>Lo que sucedió ahora fue que sobreescribimos variables, al inicio lo que hacemos es asignar el valor "Manejador SQL" a la variable $a, y a la variable $b el de "MySQL"<br>
            en luego a la variable $a cambia a "PHP server" y la variable $b se convierte en una referencia a $a,  significa que ambos, $b y $a, lo que significa que apuntan al mismo<br> 
            valor memoria. Si el valor de $a cambia en el futuro, también lo hará el valor de $b, ya que ambos están referenciando el mismo lugar en memoria.
            <br><br>';
            unset($a, $b, $c);
        ?>

    <hr>
    <h2>Ejercicio 3</h2>
        <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
            verificar la evolución del tipo de estas variables (imprime todos los componentes de los
            arreglo):</p>
        <p>$a = “PHP5”;</p>
        <p>$z[] = &$a;</p>
        <p>$b = “5a version de PHP”;</p>
        <p>$c = $b*10;</p>
        <p>$a .= $b;</p>
        <p>$b *= $c;</p>
        <p>$z[0] = “MySQL”;</p>
        <br>
        <p><b>Ejercicio realizado:</b></p>
        <?php
            $a = "PHP5";
            echo '<li>$a: '.$a.'</li>';
            $z[] = &$a;
            echo '<li>$z: ' . print_r($z, true) . '</li>';
            $b = "5a version de PHP";
            echo '<li>$b: '.$b.'</li>';
            $c = intval($b)*10;
            echo '<li>$c: '.$c.'</li>';
            $a .= $b;
            echo '<li>$a: '.$a.'</li>';
            settype($b, 'int');
            $b *= $c;
            echo '<li>$b: '.$b.'</li>';
            $z[0] = "MySQL";
            echo '<li>$z: ' . print_r($z, true) . '</li>';
        ?>
</body>
</html>