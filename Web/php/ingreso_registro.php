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
        <a href="http://localhost/NUEVA%20WEB/php/ingreso.php?cerrar_sesion=1">
        <img src="../img/cerrar-sesion.png" alt="cerrar-sesion"></a>
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

<section id="formulario-registro">
  <center>
  <form action="#" method="POST">
        <h1>REGITRAR USUARIO</h1>
        <table>
          <tr>
            <td>
              <input type="text" placeholder="Nombre" name="nombre" required>
              <input type="text" placeholder="Apellido" name="apellido" >
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" placeholder="Usuario" name="usuario" required>
              <input type="text" placeholder="contraseña" name="contraseña" required>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="email" placeholder="correo@correo.com" name="correo" required>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <center>
                Masculino
                <input type="radio" name="sexo" value="0"  >
                Femenino
                <input type="radio" name="sexo" value="1"  >
                Sin especificar
                <input type="radio" name="sexo" value="2"  >
              </center>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <center>
                <input type="submit" value="Registrar" name= 'registro'>
                <a href="ingreso.php"><input type="button" value="Cancelar"></a>
              </center>
            </td>
          </tr>
        </table>
  </form>
</center>
</section>


<?php

    $conex = mysqli_connect("localhost","root","","dbcatalogo");


    if(isset($_POST['registro']))
    {
      if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']>=1))
      {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $usuario = trim($_POST['usuario']);
        $contraseña = md5(trim($_POST['contraseña']));
        $correo = trim($_POST['correo']);

        if (isset($_POST['sexo'])){
          $sexo = $_POST['sexo'];
        }else{
          $sexo = "";
        }
        
        $fechaRegistro = date("d/m/y H:i:s");


        $consulta = "INSERT INTO tblusuario(nombre_u, apellido_u, cuenta_u, correo_u, contraseña_u, registro, sexo) 
        VALUES ('$nombre','$apellido', '$usuario','$correo', '$contraseña','$fechaRegistro','$sexo')";
        $resultado = mysqli_query($conex,$consulta);
        
        if($resultado){
          ?>
            <h3 class = "ok">¡Se Registro correctamente!</h3>
          <?php
        }
        else
        {
          ?>
            <h3 class = "bad">¡Ups ha ocurrido un error!</h3>
          <?php
        }
      }
      else{
        ?>
          <h3 class = "bad">¡Porfavor completa los campos!</h3>
        <?php
      }
    }

?>

<!-- PIE DE PAGINA -->
  <footer>
    <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
  </footer>
</body>
</html>