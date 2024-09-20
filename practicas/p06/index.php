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

    <h2>Ejercicio 4</h2>
    <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’
    a la ‘z’. Usa la función chr(n) que <br> devuelve el caracter cuyo código ASCII es n para poner
    el valor en cada índice. Es decir:
    <br>[97] => a
    <br>[98] => b
    <br>[99] => c
    <br>...
    <br>[122] => z</p>
    <ul>
        <li>Crea el arreglo con un ciclo for</li>
        <li>Lee el arreglo y crea una tabla en XHTML con echo y un ciclo foreach</li>
    </ul>
    <p>foreach ($arreglo as $key => $value) {
    <br>    # code...
    <br> }</p>

    <?php
        ej04();
    ?>

    <fieldset>
    <legend><h2>Ejercicio 5</h2></legend>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.</p>
    <ul>
        <li>Crear una variante de este script utilizando el ciclo do-while.</li>
        <li>El número dado se debe obtener vía GET.</li>
    </ul>

    <form action="" method="POST">
        <label for="edad">Introduce tu edad:</label> 
        <input type="text" name="edad" id="edad" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required min="1">
        <br><br>
        <label for="sexo">Selecciona tu sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
        </select>

        <button type="submit">Enviar</button>

    </form>

    <?php
        if(isset($_POST["edad"]) && isset($_POST["sexo"]))
        {
            $edad = $_POST['edad'];
            $sexo = $_POST['sexo'];
            ej05($edad, $sexo);
        }
    ?>
    </fieldset>

    <fieldset>
    <legend><h2>Ejercicio 6</h2></legend>
    <p>Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
    una ciudad. Cada vehículo debe ser identificado por:</p>
    <ul>
        <li>Matricula</li>
        <li>Auto</li>
        <ul>
            <li>Marca</li>
            <li>Modelo (año)</li>
            <li>Tipo (sedan|hachback|camioneta)</li>
        </ul>
        <li>Propietario</li>
        <ul>
            <li>Nombre</li>
            <li>Ciudad</li>
            <li>Dirección</li>
        </ul>
    </ul>
    <p>La matrícula debe tener el siguiente formato LLLNNNN, donde las L pueden ser letras de
    la A-Z y las N pueden ser números de 0-9. <br>Para hacer esto toma en cuenta las siguientes instrucciones:</p>
    <ul>
        <li>Crea en código duro el registro para 15 autos</li>
        <li>Utiliza un único arreglo, cuya clave de cada registro sea la matricula.</li>
        <li>Lógicamente la matricula no se puede repetir.</li>
        <li>Los datos del Auto deben ir dentro de un arreglo.</li>
        <li>Los datos del Propietario deben ir dentro de un arreglo.</li>
    </ul>
    <p>Usa print_r para mostrar la estructura general del arreglo, que luciría de forma similar al
    siguiente ejemplo:</p>
    <p>Array ( [UBN6338] => Array ( [Auto] => Array ( [marca] => HONDA [modelo] => 2020
    [tipo] => camioneta ) [Propietario] => Array ( [nombre] => Alfonzo Esparza [ciudad]
    => Puebla, Pue. [direccion] => C.U., Jardines de San Manuel ) ) [UBN6339] => Array
    ( [Auto] => Array ( [marca] => MAZDA [modelo] => 2019 [tipo] => sedan ) [Propietario]
    => Array ( [nombre] => Ma. del Consuelo Molina [ciudad] => Puebla, Pue. [direccion]
    => 97 oriente ) ) )</p>
    <p>Para que puedas identificar la estructura te lo muestro de forma más ordenada:</p>

    <pre>Array (
    [UBN6338] =>
        Array (
        [Auto] => Array (
            [marca] => HONDA [modelo] => 2020 [tipo] => camioneta
        )
        [Propietario] => Array (
            [nombre] => Alfonzo Esparza [ciudad] => Puebla, Pue. [direccion]
            => C.U., Jardines de San Manuel
        )
    )
    [UBN6339] =>
        Array (
            [Auto] => Array ([marca] => MAZDA [modelo] => 2019 [tipo] => sedan
        )
        [Propietario] => Array (
            [nombre] => Ma. del Consuelo Molina [ciudad] => Puebla, Pue.
            [direccion] => 97 oriente
        )
    )
)</pre>


    <p>Finalmente crea un formulario simple donde puedas consultar la información:</p>
    <ul>
        <li>Por matricula de auto.</li>
        <li>De todos los autos registrados.</li>
    </ul>

    <h2>Consulta de Autos</h2>
    <form action="" method="POST">
        <label for="matricula">Ingrese la matrícula del auto:</label>
        <input type="text" id="matricula" name="matricula">
        <input type="submit" name="buscar" value="Buscar">
    </form>

    <form action="" method="POST">
        <input type="submit" name="ver_todos" value="Ver Todos los Autos">
    </form>

    <?php
    $parque_vehicular = [
        'ABC1234' => [
            'Auto' => [
                'marca' => 'HONDA',
                'modelo' => 2020,
                'tipo' => 'camioneta'
            ],
            'Propietario' => [
                'nombre' => 'Alfonzo Esparza',
                'ciudad' => 'Puebla, Pue.',
                'direccion' => 'C.U., Jardines de San Manuel'
            ]
        ],
        'DEF5678' => [
            'Auto' => [
                'marca' => 'MAZDA',
                'modelo' => 2019,
                'tipo' => 'sedan'
            ],
            'Propietario' => [
                'nombre' => 'Ma. del Consuelo Molina',
                'ciudad' => 'Puebla, Pue.',
                'direccion' => '97 oriente'
            ]
        ],
        'GHI9012' => [
            'Auto' => [
                'marca' => 'TOYOTA',
                'modelo' => 2021,
                'tipo' => 'hachback'
            ],
            'Propietario' => [
                'nombre' => 'Carlos Pérez',
                'ciudad' => 'Ciudad de México, CDMX',
                'direccion' => 'Colonia Roma'
            ]
        ],
        'JKL3456' => [
            'Auto' => [
                'marca' => 'NISSAN',
                'modelo' => 2018,
                'tipo' => 'sedan'
            ],
            'Propietario' => [
                'nombre' => 'Fernanda García',
                'ciudad' => 'Guadalajara, Jalisco',
                'direccion' => 'Av. Chapultepec'
            ]
        ],
        'MNO7890' => [
            'Auto' => [
                'marca' => 'FORD',
                'modelo' => 2022,
                'tipo' => 'camioneta'
            ],
            'Propietario' => [
                'nombre' => 'Roberto Hernández',
                'ciudad' => 'Monterrey, NL',
                'direccion' => 'Centro'
            ]
        ],
       'JKL3456' => [
            'Auto' => [
                'marca' => 'Ford',
                'modelo' => 2017,
                'tipo' => 'Camioneta'
            ],
            'Propietario' => array(
                'nombre' => 'Luis Martínez',
                'ciudad' => 'Valencia',
                'direccion' => 'Calle Colón 15'
            )
        ],
        'MNO7890' => [
            'Auto' => [
                'marca' => 'Chevrolet',
                'modelo' => 2016,
                'tipo' => 'Sedán'
            ],
            'Propietario' => [
                'nombre' => 'Sara Díaz',
                'ciudad' => 'Bilbao',
                'direccion' => 'Avenida San Mamés 100'
            ]
        ],
        'PQR2345' => [
            'Auto' => [
                'marca' => 'Renault',
                'modelo' => 2020,
                'tipo' => 'Hatchback'
            ],
            'Propietario' => [
                'nombre' => 'Mario García',
                'ciudad' => 'Zaragoza',
                'direccion' => 'Calle Coso 50'
            ]
        ],
        'STU6789' => [
            'Auto' => [
                'marca' => 'Volkswagen',
                'modelo' => 2015,
                'tipo' => 'Sedán'
            ],
            'Propietario' => [
                'nombre' => 'Lucía Fernández',
                'ciudad' => 'Alicante',
                'direccion' => 'Plaza Luceros 12'
            ]
        ],
        'VWX1234' => [
            'Auto' => [
                'marca' => 'Nissan',
                'modelo' => 2018,
                'tipo' => 'Camioneta'
            ],
            'Propietario' => [
                'nombre' => 'Roberto Sánchez',
                'ciudad' => 'Córdoba',
                'direccion' => 'Avenida Gran Capitán 85'
            ]
        ],
        'YZA5678' => [
            'Auto' => [
                'marca' => 'Peugeot',
                'modelo' => 2019,
                'tipo' => 'Hatchback'
            ],
            'Propietario' => [
                'nombre' => 'Inés Gutiérrez',
                'ciudad' => 'Granada',
                'direccion'  => 'Calle Reyes Católicos 21'
            ]
        ],
        'BCD9012' => [
            'Auto' => [
                'marca' => 'Seat',
                'modelo' => 2021,
                'tipo' => 'Sedán'
            ],
            'Propietario' => [
                'nombre' => 'Javier Torres',
                'ciudad' => 'Valladolid',
                'direccion' => 'Paseo Zorrilla 70'
            ]
        ],
        'EFG3456' => [
            'Auto' => [
                'marca' => 'Fiat',
                'modelo' => 2017,
                'tipo' => 'Camioneta'
            ],
            'Propietario' => [
                'nombre' => 'Elena Navarro',
                'ciudad' => 'Murcia',
                'direccion' => 'Gran Vía Escultor Salzillo 10'
            ]
        ],
        'HIJ7890' => [
            'Auto' => [
                'marca' => 'BMW',
                'modelo' => 2022,
                'tipo' => 'Sedán'
            ],
            'Propietario' => [
                'nombre' => 'Carlos Romero',
                'ciudad' => 'Pamplona',
                'direccion' => 'Calle Estafeta 5'
            ]
        ],
        'KLM2345' => [
            'Auto' => [
                'marca' => 'Audi',
                'modelo' => 2019,
                'tipo' => 'Hatchback'
            ],
            'Propietario' => [
                'nombre' => 'María Alonso',
                'ciudad' => 'Santander',
                'direccion' => 'Calle Burgos 32'
            ]
        ],
        'XYZ1234' => [
            'Auto' => [
                'marca' => 'Kia',
                'modelo' => 2023,
                'tipo' => 'SUV'
            ],
            'Propietario' => [
                'nombre' => 'Ana López',
                'ciudad' => 'Sevilla',
                'direccion' => 'Avenida de la Constitución 45'
            ]
        ],
        'ABC5678' => [
            'Auto' => [
                'marca' => 'Tesla',
                'modelo' => 2022,
                'tipo' => 'Eléctrico'
            ],
            'Propietario' => [
                'nombre' => 'David García',
                'ciudad' => 'Barcelona',
                'direccion' => 'Paseo de Gracia 100'
            ]
        ]
    ];
    
    if (isset($_POST['buscar'])) {
        $matricula = strtoupper($_POST['matricula']); // Convertir a mayúsculas
        mostrarAutoPorMatricula($parque_vehicular, $matricula);
    }

    if (isset($_POST['ver_todos'])) {
        mostrarTodosLosAutos($parque_vehicular);
    }
    ?>

    
    </fieldset>

</body>
</html>