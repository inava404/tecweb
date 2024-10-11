<!DOCTYPE html >
<html lang="es">
  <head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de productos</title>
    <style type="text/css">
      body{
        background-color: #c2d8d9;
      }
      ol, ul { 
      list-style-type: none;
      }
      h1{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      }
      p{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
      }
      h2{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      legend{
        font-size: large;
      }
      input{
        margin-bottom: 5px;
      }
    </style>
    <script src="./src/validar_formulario.js"></script>

  </head>

  <body>

    <h1>Añadir un nuevo producto</h1>

    <form id="formularioProductos" method="post">

        <fieldset>
            <legend><b>Información del producto</b></legend>
            <ul>
                <li>
                    <label for="form-name">Nombre:</label>
                    <input type="text" name="nombre" id="form-name" value="<?= !empty($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : htmlspecialchars($_GET['nombre']) ?>">
                </li><br/>
                <li>
                    <label for="form-brand">Marca:</label>
                    <select name="marca" id="form-brand">
                        <option value="" disabled <?= !empty($_POST['marca']) || !empty($_GET['marca']) ? '' : 'selected' ?>>Selecciona una marca</option>
                        <option value="Lenovo" <?= (!empty($_POST['marca']) && $_POST['marca'] == 'Lenovo') || (!empty($_GET['marca']) && $_GET['marca'] == 'Lenovo') ? 'selected' : '' ?>>Lenovo</option>
                        <option value="Logitech" <?= (!empty($_POST['marca']) && $_POST['marca'] == 'Logitech') || (!empty($_GET['marca']) && $_GET['marca'] == 'Logitech') ? 'selected' : '' ?>>Logitech</option>
                        <option value="Razer" <?= (!empty($_POST['marca']) && $_POST['marca'] == 'Razer') || (!empty($_GET['marca']) && $_GET['marca'] == 'Razer') ? 'selected' : '' ?>>Razer</option>
                    </select>
                </li><br/>
                <li>
                    <label for="form-model">Modelo:</label>
                    <input type="text" name="modelo" id="form-model" value="<?= !empty($_POST['modelo']) ? htmlspecialchars($_POST['modelo']) : htmlspecialchars($_GET['modelo']) ?>">
                </li><br/>
                <li>
                    <label for="form-price">Precio:</label>
                    <input type="tel" name="precio" id="form-price" value="<?= !empty($_POST['precio']) ? htmlspecialchars($_POST['precio']) : htmlspecialchars($_GET['precio']) ?>">
                </li><br/>
                <li>
                    <label for="form-details">Detalles del producto:</label><br/>
                    <textarea name="detalles" rows="4" cols="60" id="form-story" placeholder="No más de 250 caracteres de longitud"><?= !empty($_POST['detalles']) ? htmlspecialchars($_POST['detalles']) : htmlspecialchars($_GET['detalles']) ?></textarea>
                </li><br/>
                <li>
                    <label for="form-units">Unidades:</label>
                    <input type="tel" name="unidades" id="form-units" value="<?= !empty($_POST['unidades']) ? htmlspecialchars($_POST['unidades']) : htmlspecialchars($_GET['unidades']) ?>">
                </li><br/>
                <li>
                    <label for="form-img">Imagen:</label>
                    <input type="text" name="imagen" id="form-img" value="<?= !empty($_POST['imagen']) ? htmlspecialchars($_POST['imagen']) : htmlspecialchars($_GET['imagen']) ?>">
                </li>
            </ul>
        </fieldset>

        <p>
            <input type="submit" value="Enviar Producto">
            <input type="reset" value="Restablecer">
        </p>

    </form>

</body>
</html>