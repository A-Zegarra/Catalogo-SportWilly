<?php
$nombre = $_POST['txtnombre'];
$descripcion = $_POST['txtdescripcion'];
$precio = $_POST['txtprecio'];
$stock = $_POST['txtstock'];
$color = $_POST['txtcolor'];
$tamaño = $_POST['txttamaño'];
$marca = $_POST['txtmarca'];
$modelo = $_POST['txtmodelo'];
$año = $_POST['txtaño'];
$dureza = $_POST['txtdureza'];
$forma = $_POST['txtforma'];
$temperatura = $_POST['txttemperatura'];
$categoria = $_POST['txtcategoria'];

$conex = mysqli_connect("localhost","root","","dbcatalogo");

$tama=$_FILES['txtfoto']['size'];
$imagensubida=fopen($_FILES['txtfoto']['tmp_name'],'r');
$binarios=fread($imagensubida,$tama);
$binarios=mysqli_escape_string($conex,$binarios);



    
    $sql = "INSERT INTO tblproducto(nombre_p, descripcion_p, precio, stock, color_p, tamaño_p, marca_p, modelo_p, año_p, dureza_p, forma_p, temperatura_p, foto_p, idcategoria) 
    VALUES ('$nombre', '$descripcion', '$precio', '$stock', '$color', '$tamaño', '$marca','$modelo', '$año', '$dureza', '$forma', '$temperatura','$binarios','$categoria')";
    $rta = mysqli_query($conex,$sql);

    if (!$rta) {
        echo "No se Inserto!";
    }
    else{
        header(("Location: mantenimiento.php"));
    }
    ?>
