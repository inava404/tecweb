<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Producto</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .text-center {
            text-align: center; /* Centra el texto */
        }
        .img-producto {
        width: 150px;  /* Ajusta el ancho como desees */
        height: 150px; /* Ajusta la altura como desees */
        object-fit: cover; /* Asegura que la imagen se recorte adecuadamente */
        }
        td:nth-child(6) {
            text-align: center; /* Centra horizontalmente */
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

@$link = new mysqli('localhost', 'root', 'N3PnEpU97_404', 'marketzone', 3306);

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
<th scope="col">Imagen</th>
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
<td><?= utf8_encode($row['detalles']) ?></td>
<td><img class="img-producto" src="<?= $row['imagen'] ?>" alt="Imagen del producto"></td>
</tr>
<?php endforeach; ?>
                
</tbody>
</table>
<?php else : ?>
<p>No hay productos que coincidan con el criterio.</p>
<?php endif; ?>
</body>
</html>