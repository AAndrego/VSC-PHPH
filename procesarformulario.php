<?php


class automovil{
    public $mar;//Atributo marca
    public $line;//Atributo
    public $mod;//Atributo
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
        $this->porc = 0;
        foreach($this->descuento as $desc){
            if ($desc == 'a'){
                $this->porc = $this->porc + ($this->resultado * 0.1);
            }
            else if($desc == 'b'){
                $this->porc = $this->porc + 50000;
            }
            else if($desc == 'c'){
                $this->porc = + $this->porc + ($this->resultado * 0.05);
            }
        }
        
        $this->total = $this->resultado - $this->porc;

        echo "El valor a pagar es: " . $this->total . "<br>";
    }

    function rango(){
        $this->rango1 =$_GET['ran1'];
        $this->rango2 =$_GET['ran2'];
        $this->rango3 =$_GET['ran3'];
        $this->porcentaje1 =$_GET['po1'];
        $this->porcentaje2 =$_GET['po2'];
        $this->porcentaje3 =$_GET['po3'];
        $this->porcentaje4 =$_GET['po4'];
        if($this->porcentaje1==null ){
            $this->porcentaje1=1.5;
            $this->porcentaje2=2;
            $this->porcentaje3=2.5;
            $this->porcentaje4=4;
        }
        if($this->rango1==null){
            $this->rango1=30000000;
            $this->rango2=70000000;
            $this->rango3=20000000;
        }
        
        
        

    }

}

$auto = new automovil;
$impu = new calculador_impuestos;
$auto -> mar = $_GET['Marca'];
$auto -> line = $_GET['Linea'];
$auto -> mod = $_GET['Modelo'];
$impu -> val = $_GET['Valor'];
$impu -> descuento = $_GET['descuento'];


echo $auto -> mar . "<br>";
echo $auto -> line . "<br>";
echo $auto -> mod . "<br>";
echo $impu -> val . "<br>";

$impu ->rango();
$impu ->calcular();
$impu ->aplicar_descuento();


?>