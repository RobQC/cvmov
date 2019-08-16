<?php

require 'conexion.php';

 $asesor  = $_POST['asesor'];
 $producto  = $_POST['producto'];
 $situacion  = $_POST['situacion'];

 

$insertar = "INSERT INTO estado VALUES ('$asesor','producto','$situacion')";

$conectar = mysqli_connect($host,$user,$password,$db);
$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../estado.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../estado.php';
    </script>";
}



?>