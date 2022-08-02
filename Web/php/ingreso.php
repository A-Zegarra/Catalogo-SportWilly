<?php
  include "conexion.php";
  session_start();

  if(isset($_GET["cerrar_sesion"])){
    session_unset();

    session_destroy();
  }

  if(isset($_SESSION["rol"])){
    switch($_SESSION["rol"]){
      case 1:
        header("location: ./mantenimiento.php");
        break;
      case 2:
          header("location: ../index.html");
        break;
      default:
    }
  }

  if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $db = new Database();
    $query = $db ->conectar()->prepare('SELECT * FROM tblusuario WHERE cuenta_u = :username AND contraseña_u = :password');
    $query->execute(["username"=> $username, "password"=>$password]);

    $row = $query->fetch(PDO::FETCH_NUM);

    if($row == true){
      //validar rol
      $rol = $row[8];
      $_SESSION["rol"] = $rol;

      switch($_SESSION["rol"]){
        case 1:
          header("location: ./mantenimiento.php");
          break;
        case 2:
            header("location: ../index.html");
          break;
        default:
      }

    }
    else{
      //no existe usuario
      echo "El usuario o contraseña son incorrectos";
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
<section class="formulario-login">
  <div>
    <center><h1>ACCESO</h1></center>
    <form action="#" method="POST">
      <center>
        <input type="text" name="username" placeholder="usuario" required>
        <br>
        <input type="password" name="password" placeholder="contraseña" required>
        <br>
        <input type="submit" value="Ingresar">
        <a href="ingreso_registro.php"><input type="button" value="Registrar"></a>
      </center>
    </form>
  </div>

</section>




<!-- PIE DE PAGINA -->
  <footer>
    <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
  </footer>
</body>
</html>