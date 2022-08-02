<?php
require 'conexion.php';
$db = new Database();
$con = $db->conectar();

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

 
if($id == '' ){
  echo "error al procesar la peticion";
  exit;
}else{ 
   $sql = $con->prepare("SELECT count(idProducto) FROM tblproducto WHERE idProducto=?"); 
   $sql->execute([$id]);
   if($sql->fetchColumn() > 0){

    $sql = $con->prepare("SELECT idProducto, nombre_p, descripcion_p, color_p, tamaño_p, marca_p, modelo_p, año_p, dureza_p, forma_p, temperatura_p, foto_p, idcategoria FROM tblproducto WHERE idProducto=?");
    $sql->execute([$id]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
      $foto = $row['foto_p'];
      $nombre = $row['nombre_p'];
      $descripcion = $row['descripcion_p'];
      $foto = $row['foto_p'];
      $color = $row['color_p'];
      $tamaño = $row['tamaño_p'];
      $marca = $row['marca_p'];
      $modelo = $row['modelo_p'];
      $año = $row['año_p'];
      $dureza = $row['dureza_p'];
      $forma = $row['forma_p'];
      $temperatura = $row['temperatura_p']; 
   }
   else{
    echo "error al procesar Peticion";
    exit;
   }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.2.1.js"></script>
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
      <li><a href=productos.php"><span class="tab-text">Productos</span></a></li>
      <li><a href="../html/servicios.html"><span class="tab-text">Servicios</span></a></li>
      <li><a href="contactanos.php"><span class="tab-text">Contáctanos</span></a></li>
      <li><a href="../html/nosotros.html"><span class="tab-text">Nosotros</span></a></li>
      <li><a href="mantenimiento.php"><span class="tab-text">Mantenimiento</span></a></li>
      <li><a href="ingreso.php"><span class="tab-text">Ingresa</span></a></li>
    </ul>
  </nav>
<!-- SECCION CUERPO -->


<section >
  <div class="detalle_producto">

    <div class="imagen_producto">
      <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto_p']); ?>">
    </div>
    <div class="detalles_productos">
      <h1><?php echo $nombre ?></h1>
      <p><?php echo $descripcion?></p>
      <p><strong class="dato">Marcas:</strong> <?php echo $marca?></p>
      <p><strong class="dato">Modelo:</strong> <?php echo $modelo?></p>
      <p><strong class="dato">Color:</strong> <?php echo $color?></p>
      <p><strong class="dato">Tamaño:</strong> <?php echo $tamaño?></p>
      <p><strong class="dato">Dureza:</strong> <?php echo $dureza?></p>
      <p><strong class="dato">Temperatura:</strong> <?php echo $temperatura?></p>
      <p><strong class="dato">Año:</strong> <?php echo $año?></p>
    </div>
  </div>
</section>





<!-- PIE DE PAGINA -->
  <footer>
    <br>
    <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
  </footer>
</body>
</html>