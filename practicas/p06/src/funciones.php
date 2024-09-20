<!--  Ejercicio 1 -->
<?php
    function ej01($num){

        if ($num%5==0 && $num%7==0)
        {
            echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
        }
            else
        {
            echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
        }
    }

    function ej02(){
       
        $matriz = array(); // Matriz para almacenar las secuencias generadas
        $iteraciones = 0;

        // Bucle para generar secuencias hasta cumplir con la condición impar-par-impar
        do {
            $num1 = rand(1, 999);
            $num2 = rand(1, 999);
            $num3 = rand(1, 999);

            $matriz[] = array($num1, $num2, $num3);

            $iteraciones++;

            // Comprobamos si cumplen con el formato impar-par-impar
            // Un número es impar si $num % 2 != 0 y par si $num % 2 == 0
        } while (!($num1 % 2 != 0 && $num2 % 2 == 0 && $num3 % 2 != 0));

        $total_numeros = $iteraciones * 3;

        echo "<h3>Secuencias Generadas:</h3>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Número 1</th><th>Número 2</th><th>Número 3</th></tr>";

        foreach ($matriz as $fila) {
            echo "<tr>";
            foreach ($fila as $numero) {
                echo "<td>$numero</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<p><strong> $total_numeros </strong> numeros obtenidos en <strong> $iteraciones </strong> iteraciones</p>";
    }

    function ej03($num){
        $num_aleatorio;
        $encontrado = false;
        $intentos = 0;
        
        do {
            $num_aleatorio = rand(1, 999);
            $intentos++;
            // Verificamos si el número aleatorio es múltiplo del número dado
            if ($num_aleatorio % $num == 0) {
                $encontrado = true;
                echo "<p>Número dado: <strong>$num</strong> <br> Se encontró el múltiplo: <strong>$num_aleatorio</strong> después de <strong>$intentos</strong> intentos.</p>";
            }
        } while (!$encontrado);
    }

    function ej04(){
        $arreglo = array();
        // Utilizamos un ciclo for para llenar el arreglo
        for ($i = 97; $i <= 122; $i++) {
            $arreglo[$i] = chr($i); // chr($i) convierte el código ASCII en el carácter correspondiente
        }

        // Mostrar el arreglo en una tabla usando un ciclo foreach
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Código ASCII</th><th>Letra</th></tr>";

        foreach ($arreglo as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }

        echo "</table>";
    }

    function ej05($sexo, $edad){
        if(isset($_POST["edad"]) && isset($_POST["sexo"])){
            $edad = $_POST['edad'];
            $sexo = $_POST['sexo'];

            if ($sexo == "femenino" && $edad >= 18 && $edad <= 35) {
                echo "<p>Bienvenida, usted está en el rango de edad permitido.</p>";
            } else {
                echo "<p>Lo siento, no cumple con los requisitos de edad o sexo.</p>";
            }
        }
    }
?>