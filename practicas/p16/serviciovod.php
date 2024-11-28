<?php
libxml_use_internal_errors(true); // Permite capturar los errores

// Rutas de los archivos
$xmlFile = 'catalogoVOD.xml';
$xsdFile = 'catalogoVOD.xsd';

// Cargar el XML
$xml = new DOMDocument();
$xml->load($xmlFile);

// Validar el XML contra el XSD
if (!$xml->schemaValidate($xsdFile)) {
    // Si hay errores de validación, se muestran
    $errors = libxml_get_errors();
    echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errores de Validación</title>
</head>
<body>
    <h1>Errores de Validación</h1>
    <ul>';
    foreach ($errors as $error) {
        echo '<li>Error [' . $error->code . ']: ' . $error->message . '</li>';
    }
    echo '</ul>
</body>
</html>';
    libxml_clear_errors();
} else {
    // Si la validación es exitosa, procesar y mostrar el contenido del XML
    $xmlContent = simplexml_load_file($xmlFile);

    echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo VOD</title>
</head>
<body>
    <h1>Catálogo VOD</h1>';

    // Mostrar los datos de la cuenta
    echo '<h2>Cuenta</h2>';
    echo '<p>Correo: ' . $xmlContent->cuenta['correo'] . '</p>';
    echo '<h3>Perfiles</h3><ul>';
    foreach ($xmlContent->cuenta->perfiles->perfil as $perfil) {
        echo '<li>Usuario: ' . $perfil['usuario'] . ', Idioma: ' . $perfil['idioma'] . '</li>';
    }
    echo '</ul>';

    // Mostrar contenido de películas
    echo '<h2>Películas</h2>';
    echo '<p>Región: ' . $xmlContent->contenido->peliculas['region'] . '</p>';
    foreach ($xmlContent->contenido->peliculas->genero as $genero) {
        echo '<h3>Género: ' . $genero['nombre'] . '</h3><ul>';
        foreach ($genero->titulo as $titulo) {
            echo '<li>Título: ' . $titulo->nombre . ' (Duración: ' . $titulo['duracion'] . ')</li>';
        }
        echo '</ul>';
    }

    // Mostrar contenido de series
    echo '<h2>Series</h2>';
    echo '<p>Región: ' . $xmlContent->contenido->series['region'] . '</p>';
    foreach ($xmlContent->contenido->series->genero as $genero) {
        echo '<h3>Género: ' . $genero['nombre'] . '</h3><ul>';
        foreach ($genero->titulo as $titulo) {
            echo '<li>Título: ' . $titulo->nombre . ' (Duración: ' . $titulo['duracion'] . ')</li>';
        }
        echo '</ul>';
    }

    echo '</body></html>';
}
?>
