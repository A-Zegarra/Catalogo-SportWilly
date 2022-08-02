<?php

    include ("./PHPMailer/src/PHPMailer.php");
    include ("./PHPMailer/src/SMTP.php");
    include ("./PHPMailer/src/Exception.php");

    try{

        $emailTo= $_POST["correo"];
        $subject= $_POST["asunto"];
        $bodyEmail=$_POST["mensaje"];

        /* var_dump("11111111111"); die(); */

        $fromemail="sportwilly22@gmail.com";
        $fromname="SportWilly";
        $host="smtp.gmail.com";
        $port="587";
        $SMTPAuth="login";
        $SMTPSecure="tls";
        $password="qowezbpcyjwzetvt";

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        
        $mail->isSMTP();
        $mail->SMTPDebug = 0 ;
        $mail->Host = $host;
        $mail->Port = $port;
        $mail->SMTPAuth = $SMTPAuth;
        $mail->SMTPSecure = $SMTPSecure ;
        $mail->Username = $fromemail;
        $mail->Password = $password;

        $mail->setFrom($fromemail, $fromname);
        $mail->addAddress($emailTo);

        $mail->isHTML(true);
        $mail->Subject=$subject;

        $mail->Body = $bodyEmail;

        if(!$mail->send()){
            error_log("MAILER: no se pudo enviar el correo");
        }
        header(("Location: contactanos.php"));
    }
    catch(Exception $e){

    }




    $conex = mysqli_connect("localhost","root","","dbcatalogo");


    if(isset($_POST['register']))
    {
        if(strlen($_POST['asunto']) >= 1 && strlen($_POST['mensaje']) >= 1)
        {
        $nombre1 = trim($_POST['nombre']);
        $correo1 = trim($_POST['asunto']);
        $telefono1 = trim($_POST['telefono']);
        $mensaje1 = trim($_POST['mensaje']);
        $fecha1 = date("d/m/y H:i:s");
        $consulta = "INSERT INTO tblmensaje(contacto_m, correo_m, telefono_m, mensaje_m, fecha_m) 
        VALUES ('$nombre1','$correo1','$telefono1','$mensaje1','$fecha1')";
        $resultado = mysqli_query($conex,$consulta);
        
        if($resultado){
            ?>
            <h3 class = "ok">¡Se envio correctamente!</h3>
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