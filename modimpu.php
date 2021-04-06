<?php
require 'conexion.php';
$r1=$_GET['Rang1'];
$r2=$_GET['Rang2'];
$r3=$_GET['Rang3'];
$p1=$_GET['Por1'];
$p2=$_GET['Por2'];
$p3=$_GET['Por3'];
$p4=$_GET['Por4']; 

$insertar = "INSERT INTO impuesto (rango_1,rango_2,rango_3,porcent_1,porcent_2,porcent_3,porcent_4)  VALUES ('$r1','$r2','$r3','$p1','$p2','$p3','$p4')";

$query =  mysqli_query($conectar, $insertar);


if($query){
    echo "<script> alert('Guardado correctamente');
    location.href = '../procesarformulario.php';
    </script> ";
}else{
    echo "<script> alert('incorrecto'); </script>";
}

?>