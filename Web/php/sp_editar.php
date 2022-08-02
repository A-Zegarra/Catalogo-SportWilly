<?php
$id = $_POST['txtid'];
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



    
    $sql = "UPDATE tblproducto SET nombre_p='$nombre', descripcion_p='$descripcion', precio='$precio', stock='$stock', color_p='$color', tamaño_p='$tamaño', marca_p='$marca', modelo_p='$modelo', año_p='$año', dureza_p='$dureza', forma_p='$forma', temperatura_p='$temperatura', foto_p='$binarios', idcategoria='$categoria' where idProducto like $id";
    $rta = mysqli_query($conex,$sql);

    if (!$rta) {
        echo "No se Actualizo!";
    }
    else{
        header(("Location: mantenimiento.php"));
    }
    ?>
