<?php
$conex = mysqli_connect("localhost","root","","dbcatalogo");

if (!empty($_POST)) {
     $id = $_POST['idProducto'];
     $query_delete = mysqli_query($conex,"UPDATE tblproducto SET estado = 0 WHERE idProducto = $id");
     if ($query_delete) {
        header("location: mantenimiento.php");
     }
     else{
        echo "Error al eliminar";
     }
}

if(empty($_REQUEST['id'])){
    header("location: mantenimiento.php");
}
else{
    
    $idproducto = $_REQUEST['id'];
    $query = mysqli_query($conex,"SELECT idProducto, nombre_p, estado FROM tblproducto WHERE idProducto = $idproducto");
    $resul = mysqli_num_rows($query);

    if($resul > 0){
        while($data = mysqli_fetch_array($query)){
            $id = $data['idProducto'];
            $nombre = $data['nombre_p'];
            $estado = $data['estado'];
        }
    }
    else{
        header("location: mantenimiento.php");
    }
    }





/* 
ELIMINAR DATO (DELETE)

$id = $_GET['id'];

$conex = mysqli_connect("localhost","root","","dbcatalogo");

$sql = "DELETE FROM tblproducto where idProducto like '$id'";
$rta = mysqli_query($conex,$sql);

    if (!$rta) {
        echo "No se Elimino!";
    }
    else{
        header(("Location: mantenimiento.php"));
    } */
    ?>

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

<div class="tabla_mantenimiento2">
    <h2>¿Estas seguro que desea eliminar el siguiente registro?</h2>
    <br>
    <p>Codigo: <span> <?php echo $id ?></span></p>
    <br>
    <p>Nombre: <span> <?php echo $nombre ?></span></p>
    <br>
    <p>Estado: <span> <?php if($estado == 1) { echo "Activo"; } else{ echo "Inactivo"; } ?></span></p>
    <br>

    <form method="POST" action="">
        <input class="botones-editar" type="hidden" name="idProducto" value="<?php echo $id;?>">
        <input class="botones-editar" type="submit" value="Aceptar">
        <a href="mantenimiento.php"><input type="button" value="Cancelar"></a>
    </form>
</div>

<!-- PIE DE PAGINA -->
  <footer>
    <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
  </footer>
</body>
</html>