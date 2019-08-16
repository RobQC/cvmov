<?php

require 'conexion.php';

 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $dni = $_POST['dni'];
 $celular = $_POST['celular'];
 $celular2 = $_POST['celular2'];
 $departamento = $_POST['departamento'];
 $distrito = $_POST['distrito'];
 $direccion =$_POST['direccion'];
 $referencia = $_POST['referencia'];
 $producto = $_POST['producto'];
 $precio = $_POST['precio'];
 $fechanac = $_POST['fechanac'];
 $nombreapo = $_POST['nombreapo'];
 $asesor = $_POST['asesor'];


$insertar = "INSERT INTO clientes VALUES ('$nombre','$apellido','$dni','$celular','$celular2','$departamento','$distrito','$direccion','$referencia','$producto','precio','fechanac','nombreapo','asesor')";

$conectar = mysqli_connect($host,$user,$password,$db);
$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../estado.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../venta.php';
    </script>";
}



?>