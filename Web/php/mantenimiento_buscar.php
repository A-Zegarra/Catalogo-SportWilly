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
<div class="buscador_mantenimiento">
  <form action="mantenimiento_buscar.php" method="POST">
    <input type="text" name="buscar" id="">
    <input type="submit" value="Buscar">
    <a href="mantenimiento_nuevo.php"><input type="button" value="Nuevo"></a>
  </form>
</div>
<div class="tabla_mantenimiento">
  <table>
    <tr class="titulos_mante">
      <td>CODIGO</td>
      <td>NOMBRE</td>
      <td>DESCRIPCION</td>
      <td>PRECIO</td>
      <td>STOCK</td>
      <td>COLOR</td>
      <td>TAMAÑO</td>
      <td>MARCA</td>
      <td>MODELO</td>
      <td>AÑO</td>
      <td>DUREZA</td>
      <td>FORMA</td>
      <td>TEMPERATURA</td>
      <td>CATEGORIA</td>
      <td>FOTO</td>
      <td>OPCIONES</td>
    </tr>
    <?PHP
    $buscar = $_POST['buscar'];
      $conex = mysqli_connect("localhost","root","","dbcatalogo");
      $sql = "SELECT idProducto, nombre_p, descripcion_p, precio, stock, color_p, tamaño_p, marca_p, modelo_p, año_p, dureza_p, forma_p, temperatura_p, foto_p, idcategoria, estado FROM tblproducto where nombre_p like '$buscar' '%'";
      $rta = mysqli_query($conex,$sql);
      while ($mostrar = mysqli_fetch_row($rta)) {
    ?>
        <tr>
          <td><?php echo $mostrar['0']; ?></td>
          <td><?php echo $mostrar['1']; ?></td>
          <td><?php echo $mostrar['2']; ?></td>
          <td><?php echo $mostrar['3']; ?></td>
          <td><?php echo $mostrar['4']; ?></td>
          <td><?php echo $mostrar['5']; ?></td>
          <td><?php echo $mostrar['6']; ?></td>
          <td><?php echo $mostrar['7']; ?></td>
          <td><?php echo $mostrar['8']; ?></td>
          <td><?php echo $mostrar['9']; ?></td>
          <td><?php echo $mostrar['10']; ?></td>
          <td><?php echo $mostrar['11']; ?></td>
          <td><?php echo $mostrar['12']; ?></td>
          <td><?php echo $mostrar['14'] ?></td>
          <td><img src="data:image/jpg;base64, <?php echo base64_encode($mostrar['13']); ?>" style="height:50px ; width : 50px"></td>
          
          <td>
            <a class="boton-funcion" href="mantenimiento_editar.php?
            id=<?php echo $mostrar ['0'] ?> & 
            nombre=<?php echo $mostrar ['1'] ?> & 
            descripcion=<?php echo $mostrar ['2'] ?> & 
            precio=<?php echo $mostrar ['3'] ?> & 
            stock=<?php echo $mostrar ['4'] ?> & 
            color=<?php echo $mostrar ['5'] ?> & 
            tamaño=<?php echo $mostrar ['6'] ?> & 
            marca=<?php echo $mostrar ['7'] ?> & 
            modelo=<?php echo $mostrar ['8'] ?> & 
            año=<?php echo $mostrar ['9'] ?> & 
            dureza=<?php echo $mostrar ['10'] ?> & 
            forma=<?php echo $mostrar ['11'] ?> & 
            temperatura=<?php echo $mostrar ['12'] ?> & 
            categoria=<?php echo $mostrar ['14'] ?>">Editar</a>
            <a class="boton-funcion2" href="mantenimiento_eliminar.php? id=<?php echo $mostrar ['0'] ?>">Eliminar</a>
          </td>
        </tr>
    <?php
      }
    ?>
  </table>
</div>
<!-- PIE DE PAGINA -->
  <footer>
    <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
  </footer>
</body>
</html>