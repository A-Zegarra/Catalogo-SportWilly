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
      <a href="../php/ingreso.php?cerrar_sesion=1"><img src="../img/cerrar-sesion.png" alt="cerrar-sesion"></a>
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

    <!-- SECCION ARTICULOS -->
    <section class="contacto">
        <article class="mensaje">
            <p> "Nunca empieces un negocio solo para <strong>hacer dinero,</strong><br> empieza un negocio para hacer una <strong>diferencia</strong>.
                <br><strong><em>...Marie Forleo"</em></strong><br>
            </p>
            <img src="../img/contactanos/foto.jpg" id="foto">
        </article>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d676.6071959727998!2d-71.51690236685495!3d-16.401026306535165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b24ae927011%3A0x775291b9f3d3dfb7!2sSport%20Willy!5e0!3m2!1ses-419!2spe!4v1652076842412!5m2!1ses-419!2spe"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contacto">
        <article class="formulario">
            <form method="post" action="contactanos_enviar.php" name="enviar">
                <label>Nombre: </label><br>
                <input type="name" name="nombre" placeholder="nombre">
                <br>
                <label>Correo: </label><br>
                <input type="mail" name="asunto" placeholder="asunto" required>
                <input hidden type="email" name="correo" placeholder="nombre@gmail.com" value="sportwilly22@gmail.com" required style="margin-left:-2px; width:300px; height: 30px;">
                <br>
                <label>Teléfonos: </label><br>
                <input type="tel" name="telefono" placeholder="000000000" maxlength="9" >
                <br>
                <label>Mensaje: </label><br>
                <textarea name="mensaje" rows="10" cols="40" placeholder="Escriba aqui su mensaje" required></textarea>
                <br>
                <input type="submit" name="register" class="botonenviar">
            </form>
        </article>

        <article class="datos">
            <h1>Contáctanos</h1> <br>
            <p>
                <h2>Direccion:</h2> <br> Cal. Raymondi 123, Urb. Manuel Prado, Paucarpata - Arequipa <br> Centro Comercial Mall d el Sur - San Juan de Miraflores <br> Centro Comercial Plaza Lima Sur - Chorrillos<br><br>

                <h2>Teléfono:</h2> <br> 054-522960 <br> 958-951077 <br> 979-234771 <br><br>

                <h2>Correo Electronico:</h2> <br> autoSportWillyAQP@gmail.com
            </p>
        </article>
    </section>

    <!-- PIE DE PAGINA -->
    <footer>
        <h6>Copyright © Auto Servicio Willy 2022 Todos los derechos reservados.</h6>
    </footer>
</body>
</html>