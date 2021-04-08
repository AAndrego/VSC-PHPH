<?php

require 'conexion.php';
class automovil{
    public $mar;//Atributo marca
    public $line;//Atributo linea
    public $mod;//Atributo modelo
};

class calculador_impuestos{
    var $resultado;
    var $porc;
    var $val;
    var $total;
    var $descuento;
    var $rango1;
    var $rango2;
    var $rango3;
    var $porcentaje1;
    var $porcentaje2;
    var $porcentaje3;
    var $porcentaje4;
    var $d1;
    var $d2;
    var $d3;


    //Este metodo es para calcular el impuesto neto
    function calcular(){
        if($this->val > 0 && $this->val <= $this->rango1){
            $this->porc = $this->porcentaje1 / 100;
        }
        if($this->val > $this->rango1 && $this->val <= $this->rango2){
            $this->porc = $this->porcentaje2 / 100;
        }
        if($this->val > $this->rango2 && $this->val <= $this->rango3){
            $this->porc = $this->porcentaje3 / 100;
        }
        if($this->val > $this->rango3){
            $this->porc = $this->porcentaje4 / 100;
        }
        $this->resultado =$this->val * $this->porc;
        echo "Valor del impuesto" . $this->resultado . "<br>";
    }
    
    //Este metodo es para calcular el descuento y el valor a pagar del impuesto
    function aplicar_descuento(){
        
          if ($this->d1 == '0.1'){
                $this->porc = 0;
                $this->porc = $this->porc + ($this->resultado * 0.1);
            }
            else if($this->d2 == '50000'){
                $this->porc = 0;
                $this->porc = $this->porc + 50000;
            }
            else if($this->d3 == '0.05'){
                $this->porc = 0;
                $this->porc = + $this->porc + ($this->resultado * 0.05);
            }
        
        $this->total = $this->resultado - $this->porc;

        echo "El valor a pagar es: " . $this->total . "<br>";
    }

 /*
            porcentaje1=1.5;
            porcentaje2=2;
            porcentaje3=2.5;
            porcentaje4=4;
            rango1=30000000;
            rango2=70000000;
            rango3=20000000;
*/

}

$auto = new automovil;
$impu = new calculador_impuestos;

$id_auto = "SELECT MAX(id_auto) FROM automovil";

$resultado = mysqli_query($conectar, $id_auto);
while($consulta = mysqli_fetch_array($resultado))
{
    $max = $consulta['MAX(id_auto)'];
}




$id_re = "SELECT * FROM impuesto
INNER JOIN automovil 
ON impuesto.id_recibo = automoviL.id_recibo WHERE automovil.id_auto = '$max'";

$resultado = mysqli_query($conectar, $id_re);

while($consulta = mysqli_fetch_array($resultado))
{
$auto -> mar =  $consulta['marca'];
$auto -> line = $consulta['linea'];
$auto -> mod =  $consulta['modelo'];
$impu -> val =  $consulta['valor'];
$impu -> rango1 =  $consulta['rango_1'];
$impu -> rango2 =  $consulta['rango_2'];
$impu -> rango3 =  $consulta['rango_3'];
$impu -> porcentaje1 =  $consulta['porcent_1'];
$impu -> porcentaje2 =  $consulta['porcent_2'];
$impu -> porcentaje3 =  $consulta['porcent_3'];
$impu -> porcentaje4 =  $consulta['porcent_4'];
}


$id_desc = "SELECT MAX(id_descu) FROM descuentos";

$resultado = mysqli_query($conectar, $id_desc);
while($consulta = mysqli_fetch_array($resultado))
{
    $max_desc = $consulta['MAX(id_descu)'];
}

$i_de = "SELECT * FROM descuentos WHERE id_descu = '$max_desc'";

$resultado = mysqli_query($conectar, $i_de);
while($consulta = mysqli_fetch_array($resultado))
{
$impu -> d1 =  $consulta['descu_1'];
$impu -> d2 =  $consulta['descu_2'];
$impu -> d3 =  $consulta['descu_3'];
}




echo $auto -> mar . "<br>";
echo $auto -> line . "<br>";
echo $auto -> mod . "<br>";
echo $impu -> val . "<br>";

$impu ->calcular();
$impu ->aplicar_descuento();


?>