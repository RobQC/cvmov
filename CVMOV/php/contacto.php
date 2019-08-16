<?php

require 'conexion.php';

 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $dni = $_POST['dni'];
 $celular = $_POST['celular'];
 $producto = $_POST['producto'];
 $tipoproducto = $_POST['tipoproducto'];
 $direccion =$_POST['direccion'];
 $asesor = $_POST['asesor'];
 $comentario = $_POST['comentario'];
 

$insertar = "INSERT INTO contacto VALUES ('$nombre','$apellido','$dni','$celular','$producto','$tipoproducto','$direccion','$asesor','$comentario')";

$conectar = mysqli_connect($host,$user,$password,$db);
$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../contacto.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../contacto.php';
    </script>";
}



?>