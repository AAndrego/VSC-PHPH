<?php

require 'conexion.php';


//--------------------------------------------------- 

$mar=$_GET['Marca'];
$line=$_GET['Linea'];
$mod=$_GET['Modelo'];
$val=$_GET['Valor'];

$id_re = "SELECT MAX(id_recibo) FROM impuesto";
$resultado = mysqli_query($conectar, $id_re);
while($consulta = mysqli_fetch_array($resultado))
{
    $id = $consulta['MAX(id_recibo)'];
}

$insertar = "INSERT INTO automovil (id_recibo,marca,linea,modelo,valor)  VALUES ('$id','$mar','$line','$mod','$val')";

$query =  mysqli_query($conectar, $insertar);


//-----------------------------------------------

$desc1 = 0;
$desc2 = 0;
$desc3 = 0; 
$descuento = $_GET['descuento'];

foreach($descuento as $desc){
    if ($desc == 'a'){
        $desc1 = 0.1;
    }
    else if($desc == 'b'){
        $desc2 = 50000;
    }
    else if($desc == 'c'){
        $desc3 = 0.05;
    }
}

$insertard = "INSERT INTO descuentos (descu_1,descu_2,descu_3)  VALUES ('$desc1','$desc2','$desc3')";

$query =  mysqli_query($conectar, $insertard);

  if($query){
        echo "<script> alert('Guardado correctamente');
        location.href = '../procesarformulario.php';
        </script> ";
    }else{
        echo "<script> alert('incorrecto'); </script>";
    }



?>