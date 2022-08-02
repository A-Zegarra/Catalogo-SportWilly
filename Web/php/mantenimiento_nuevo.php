<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sport Willy</title>
</head>
<body>
    <!-- CABECERA -->
    <header>
    <img src="../img/logo.jpg" class="logo">
    <div class="titulo">
      <h1>Sport Willy</h1>
      <p>Repuestos para automoviles y más! </p>
    </div>
    <div class="social">
      <a href="http://facebook.com"><img src="../img/facebook.png" alt="facebook"></a>
      <a href="http://instagram.com"><img src="../img/instagram.png" alt="instagram"></a>
      <a href="http://web.whatsapp.com"><img src="../img/whatsapp.png" alt="whatsapp"></a>
    </div>
  </header>
<!-- NAVEGACION -->
<nav class="wrap">
    <ul class="tabs">
      <li><a href="../index.html"><span class="tab-text">Inicio</span></a></li>
      <li><a href="productos.php"><span class="tab-text">Productos</span></a></li>
      <li><a href="../html/servicios.html"><span class="tab-text">Servicios</span></a></li>
      <li><a href="contactanos.php"><span class="tab-text">Contáctanos</span></a></li>
      <li><a href="../html/nosotros.html"><span class="tab-text">Nosotros</span></a></li>
      <li><a href="mantenimiento.php"><span class="tab-text">Mantenimiento</span></a></li>
      <li><a href="ingreso.php"><span class="tab-text">Ingresa</span></a></li>
    </ul>
  </nav>
<!-- SECCION CUERPO -->
<div class="tabla_mantenimiento">
  <form action="sp_insertar.php" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
        <td colspan="6" align="center"><label><h1>Registro de Productos</h1></label></td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><input type="text" value="" maxlength="35" name="txtnombre" required></td>

        <td>Descripcion</td>
        <td><input type="text" value="" maxlength="150" name="txtdescripcion"></td>

        <td>Precio</td>
        <td><input type="text" value="" maxlength="5" name="txtprecio"></td>
      </tr>
      <tr>
        <td>Stock</td>
        <td><input type="text" value="" maxlength="4" name="txtstock"></td>

        <td>Color</td>
        <td><input type="text" value="" maxlength="30" name="txtcolor"></td>

        <td>Tamaño</td>
        <td><input type="text" value="" maxlength="25" name="txttamaño"></td>
      </tr>
      <tr>
        <td>Marca</td>
        <td><input type="text" value="" maxlength="30" name="txtmarca"></td>

        <td>Modelo</td>
        <td><input type="text" value="" maxlength="30" name="txtmodelo"></td>

        <td>Año</td>
        <td><input type="text" value="" maxlength="20" name="txtaño"></td>
      </tr>
      <tr>
        <td>Dureza</td>
        <td><input type="text" value="" maxlength="25" name="txtdureza"></td>

        <td>Forma</td>
        <td><input type="text" value="" maxlength="25" name="txtforma"></td>

        <td>Temperatura</td>
        <td><input type="text" value="" maxlength="5" name="txttemperatura"></td>
      </tr>
      <tr>
        <td>Categoria</td>
        <td><input type="text" value="" maxlength="5" name="txtcategoria" required></td>
        <td>Foto</td>
        <td colspan="3"><input type="file" name="txtfoto" required></td>
      </tr>
      <tr>
        <td colspan="6">
          <input type="submit" value="Guardar" class="botones-editar">
          <a href="mantenimiento.php">
            <input type="button" value="Cancelar" class="botones-editar">
          </a>
        </td>
      </tr>
    </table>
  </form>
</div>

<!-- PIE DE PAGINA -->
  <footer>
    <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
  </footer>
</body>
</html>