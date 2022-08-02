<?php
require 'conexion.php';

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT idProducto, nombre_p, descripcion_p, color_p, tamaño_p, marca_p, modelo_p, año_p, dureza_p, forma_p, temperatura_p, foto_p, idcategoria FROM tblproducto"); /* se esta creando consultas */
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

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
      <a href="http://localhost/NUEVA%20WEB/php/ingreso.php?cerrar_sesion=1"><img src="../img/cerrar-sesion.png" alt="cerrar-sesion"></a>
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

<div class="contenido-pag-productos">
  <div class="categoria-producto">

      <button name="todos " class="boton-categoria-productos" >Todos</button>
      <button name="1" class="boton-categoria-productos" >Tapa de rueda</button>
      <button name="2" class="boton-categoria-productos" >Limpiaparabrisas</button>
      <button name="3" class="boton-categoria-productos" >Seguro de rueda</button>
      <button name="4" class="boton-categoria-productos">Gomas de puerta</button>
      <button name="5" class="boton-categoria-productos" >Sobrepisos</button>
      <button name="6" class="boton-categoria-productos" >Sobreasientos</button>
      <button name="7" class="boton-categoria-productos" >Forros de timón</button>
      <button name="8" class="boton-categoria-productos" >Forros de asiento</button>
      <button name="9" class="boton-categoria-productos" >Accesorios de ayuda</button>
      <button name="10" class="boton-categoria-productos" >Accesorios de adornos</button>
      <button name="11" class="boton-categoria-productos" >Siliconas</button>
  </div>
</div>
<!-- lista de productos -->

<div class="buscador">
  <input class="input" type="text" id="buscar-listaproductos" name="buscar-listaproductos" placeholder="Buscar producto">
</div>
<div class="lista-productos">
  <ul class="productos">
  <?php foreach($resultado as $row){ ?>
      <li class="contenido-productos" category="<?php echo $row ['idcategoria']; ?>">
          <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto_p']); ?>" class="img-productos"> <br>
          <a href="productos_detalle.php?id=<?php echo $row['idProducto']; ?>&cat=<?php echo $row['idcategoria']; ?>" class="texto-producto"> <?php echo $row['nombre_p']; ?> </a>
      </li>
  <?php } ?>

  </ul>
</div>
<script src="../js/productos.js"></script>

<!-- PIE DE PAGINA -->
  <footer>
    <br>
    <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
  </footer>
</body>
</html>