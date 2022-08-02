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

<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$stock = $_GET['stock'];
$color = $_GET['color'];
$tamaño = $_GET['tamaño'];
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$año = $_GET['año'];
$dureza = $_GET['dureza'];
$forma = $_GET['forma'];
$temperatura = $_GET['temperatura'];
$categoria = $_GET['categoria'];
$conex = mysqli_connect("localhost","root","","dbcatalogo");
?>
<div class="tabla_mantenimiento">
  <form action="sp_editar.php" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
        <td colspan="6" align="center"><label><h1>Registro de Productos</h1></label></td>
      </tr>
      <tr>
        <td>Codigo</td>
        <td><input type="text" value="<?=$id?>" maxlength="5" name="txtid" readonly></td>

        <td>Nombre</td>
        <td><input type="text" value="<?=$nombre?>" maxlength="35" name="txtnombre"></td>

        <td>Descripcion</td>
        <td><input type="text" value="<?=$descripcion?>" maxlength="150" name="txtdescripcion"></td>


      </tr>
      <tr>
        <td>Precio</td>
        <td><input type="text" value="<?=$precio?>" maxlength="5" name="txtprecio"></td>

        <td>Stock</td>
        <td><input type="text" value="<?=$stock?>" maxlength="4" name="txtstock"></td>

        <td>Color</td>
        <td><input type="text" value="<?=$color?>" maxlength="30" name="txtcolor"></td>

      </tr>
      <tr>
        
        <td>Tamaño</td>
        <td><input type="text" value="<?=$tamaño?>" maxlength="25" name="txttamaño"></td>

        <td>Marca</td>
        <td><input type="text" value="<?=$marca?>" maxlength="30" name="txtmarca"></td>

        <td>Modelo</td>
        <td><input type="text" value="<?=$modelo?>" maxlength="30" name="txtmodelo"></td>


      </tr>
      <tr>
        <td>Año</td>
        <td><input type="text" value="<?=$año?>" maxlength="20" name="txtaño"></td>

        <td>Dureza</td>
        <td><input type="text" value="<?=$dureza?>" maxlength="25" name="txtdureza"></td>

        <td>Forma</td>
        <td><input type="text" value="<?=$forma?>" maxlength="25" name="txtforma"></td>


      </tr>
      <tr>
      
        <td>Temperatura</td>
        <td><input type="text" value="<?=$temperatura?>" maxlength="5" name="txttemperatura"></td>

        <td>Categoria</td>
        <td><input type="text" value="<?=$categoria?>" maxlength="5" name="txtcategoria"></td>

        <td>Foto</td>
        <td><input type="file" value="<?=$binarios?>" name="txtfoto" required></td>
      </tr>
      <tr>
        <td colspan="6">
          <input type="submit" value="Actualizar" class="botones-editar">
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