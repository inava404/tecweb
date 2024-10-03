<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #c2d8d9;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif }
			h2 {font-size: 1.2em;
			color: #4A0048;
			font-family: Verdana, Geneva, Tahoma, sans-serif;}
		</style>
	</head>
	<body>
		<?php
			$nombre = $_POST['nombre'];
			$marca  = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$precio = $_POST['precio'];
			$detalles = $_POST['detalles'];
			$unidades = $_POST['unidades'];
			$imagen   = $_POST['imagen'];

			/** SE CREA EL OBJETO DE CONEXION */
			@$link = new mysqli('localhost', 'root', 'N3PnEpU97_404', 'marketzone');	

			/** comprobar la conexión */
			if ($link->connect_errno) 
			{
				die('Falló la conexión: '.$link->connect_error.'<br/>');
				/** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
			}

			/** Comprobar si los datos no existen ya en la base de datos */
			$sql = "SELECT * FROM productos WHERE nombre='$nombre' AND marca='$marca' AND modelo='$modelo'";
			$result = $link->query($sql);

			if ($result->num_rows > 0){ /** Si no existen los datos, se crea la tabla */
				echo "<h1>Error: El producto ya existe.</h1>";
				
			} else{ /** En caso contrario, se muestra un mensaje de que los datos ya existen en la base de datos */
				/** Crear una tabla que no devuelve un conjunto de resultados */
				$sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";
				if ( $link->query($sql) ) 
				{
					echo'<h1>MUCHAS GRACIAS</h1>';
					echo'<p>Gracias por registrar este nuevo producto a la base de datos de  "Marketzone"&#174;. Hemos recibido la siguiente información de tu registro:</p>';
					echo'<h2>Acerca del producto:</h2>';
					echo'<ul>';
						echo'<li><strong>Nombre:</strong> <em>';
						echo $_POST['nombre']; echo '</em></li>';
						echo'<li><strong>Marca:</strong> <em>';echo $_POST['marca']; echo'</em></li>';
						echo '<li><strong>Modelo:</strong> <em>'; echo $_POST['modelo']; echo'</em></li>';
					echo'</ul>';
					echo'<p><strong>Detalles del producto:</strong> <em>';echo $_POST['detalles']; echo'</em></p>';
					echo'<h2>Stock y Precio</h2>';
					echo'<ul>
						<li><strong>Precio:</strong> <em>$';echo $_POST['precio']; echo'</em></li>';
						echo'<li><strong>Unidades:</strong> <em>'; echo $_POST['unidades']; echo'</em></li>
					</ul>';
					echo 'Producto insertado con ID: '.$link->insert_id;
				}
				else
				{
					echo '<h1>El Producto no pudo ser insertado =(</h1>';
				}
			}
			$link->close();
		?>
		
		

		<p>
		    <a href="http://validator.w3.org/check?uri=referer"><img
		      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
		</p>
	</body>
</html>