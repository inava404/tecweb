<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<script>
    function show(event) {
        var row = event.target.parentNode.parentNode;

        var nombre = row.cells[1].innerHTML;
        var marca = row.cells[2].innerHTML;
        var modelo = row.cells[3].innerHTML;
        var precio = row.cells[4].innerHTML;
        var unidades = row.cells[5].innerHTML;
        var detalles = row.cells[6].innerHTML;
        var imagen = row.cells[7].querySelector('img').src;

        alert("Nombre: " + nombre + "\nMarca: " + marca + "\nModelo: " + modelo + "\nPrecio: " + precio + "\nDetalles: " + detalles + "\nUnidades: " + unidades + "\nImagen: " + imagen);

		send2form(nombre, marca, modelo, precio, unidades, detalles, imagen);
    }
</script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        img {
            width: 100%; /* La imagen ocupará todo el ancho de la celda */
            height: auto; /* Mantiene la proporción */
            object-fit: cover; /* Para que la imagen se recorte si es necesario sin deformarse */
        }
        .col-imagen {
            width: 150px; /* Ajusta el ancho de la columna imagen */
        }
    </style>
</head>

<body>
<h2 class="text-left">PRODUCTOS</h2>
<br/>

<?php
    if(isset($_GET['tope'])) {
            $tope = $_GET['tope'];
        
            // Verificar si $tope es un número
            if (!is_numeric($tope)) {
                die('El parámetro "tope" necesita ser un número :(');
            }
            $tope = (int)$tope; // Convertir a entero
        } else {
            die('Parámetro "tope" no detectado...');
        }

    // Verificar que el tope no esté vacío
    if (!empty($tope)) {

    @$link = new mysqli('localhost', 'root', 'N3PnEpU97_404', 'marketzone');

    // Comprobar la conexión
    if ($link->connect_errno) {
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    }

    // Ejecutar la consulta
    $data = [];
    if ($result = $link->query("SELECT * FROM productos WHERE unidades <= $tope")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $data[] = $row;  // Guardar cada fila en el arreglo $data
    }
                /** útil para liberar memoria asociada a un resultado con demasiada información */
    $result->free(); 
    }

    $link->close(); // Cerrar la conexión
    }

    // Mostrar la tabla si hay datos
        /*"<?= ?>" es una forma abreviada de escribir "<?php echo ?>" en PHP*/
    if (!empty($data)) :
?>

<table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Detalles</th>
                    <th scope="col" class="col-imagen">Imagen</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>                
                    <tr>
                        <th scope="row"><?= $row['id'] ?></th> 
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['modelo'] ?></td>
                        <td><?= $row['precio'] ?></td>
                        <td><?= $row['unidades'] ?></td>
                        <td><?= $row['detalles'] ?></td>
                        <td class="col-imagen"><img src="<?= $row['imagen'] ?>" alt="<?= $row['nombre'] ?>"></td>
                        <td>
                            <p class="btn btn-primary" 
                            style="background-color: #c2d8d9; border: 2px solid #c2d8d9;" 
                            onclick="show(event)">Modificar</p>
                        </td>
                    </tr>
                <?php endforeach; ?>   
            </tbody>
        </table>
        <?php elseif(!empty($id)) : ?>
            <script>
                alert('El ID del producto no existe');
            </script>
        <?php endif; ?>
        <script>
            function send2form(nombre, marca, modelo, precio, unidades, detalles, imagen) {
                var form = document.createElement("form");

                var nombreIn = document.createElement("input");
                nombreIn.type = 'hidden';
                nombreIn.name = 'nombre';
                nombreIn.value = nombre;
                form.appendChild(nombreIn);

                var marcaIn = document.createElement("input");
                marcaIn.type = 'hidden';
                marcaIn.name = 'marca';
                marcaIn.value = marca;
                form.appendChild(marcaIn);

                var modeloIn = document.createElement("input");
                modeloIn.type = 'hidden';
                modeloIn.name = 'modelo';
                modeloIn.value = modelo;
                form.appendChild(modeloIn);

                var precioIn = document.createElement("input");
                precioIn.type = 'hidden';
                precioIn.name = 'precio';
                precioIn.value = precio;
                form.appendChild(precioIn);

                var unidadesIn = document.createElement("input");
                unidadesIn.type = 'hidden';
                unidadesIn.name = 'unidades';
                unidadesIn.value = unidades;
                form.appendChild(unidadesIn);

                var detallesIn = document.createElement("input");
                detallesIn.type = 'hidden';
                detallesIn.name = 'detalles';
                detallesIn.value = detalles;
                form.appendChild(detallesIn);

                var imagenIn = document.createElement("input");
                imagenIn.type = 'hidden';
                imagenIn.name = 'imagen';
                imagenIn.value = imagen;
                form.appendChild(imagenIn);

                form.method = 'POST';
                form.action = 'http://localhost/tecweb/practicas/p09/formulario_productos_v2.php';

                // Añadir el formulario al cuerpo del documento y enviarlo
                document.body.appendChild(form);
                form.submit();
            }
        </script>
    </body>
</html>