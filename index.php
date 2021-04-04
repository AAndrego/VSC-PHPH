<!DOCTYPE html>

<html lang= "es">

<head>

<meta charset="utf-8">

<title>Impuesto vehicular</title>

</head>

<body>

    <section>
	    <h1>Calculo de impuestos</h1>
        <h3>Datos del vehiculo:</h3>
	    <form name="cuestionario"  method="get" action="procesarformulario.php">
		
        <p><label>Marca:</label>
		
        <input type="text" name="Marca"></p>
        
        <p><label>Linea:</label>
		
        <input type="text" name="Linea"></p>
		
        <p><label>Modelo:</label>
		
        <input type="text" name="Modelo"></p>

        <p><label>Valor:</label>
		
         <input type="text" name="Valor"></p>

		
		<h3>Descuentos:</h3>
		
        <p>
        <label for="op1">
		<input type="checkbox" id="op1" name="descuento[]" value="a"> Pronto pago
        </label>

        <label for="op2">
		<input type="checkbox" id="op2" name="descuento[]" value="b"> Translado de cuenta
		</label>
        
        <label for="op3">
		<input type="checkbox" id="op3" name="descuento[]" value="c"> Servicio publico
        </label>
        </p>
        <?php
     $r1=$_GET['Rang1'];
     $r2=$_GET['Rang2'];
     $r3=$_GET['Rang3'];
     $p1=$_GET['Por1'];
     $p2=$_GET['Por2'];
     $p3=$_GET['Por3'];
     $p3=$_GET['Por4']; 

    ?>
    <input type="hidden" name="ran1" value="<?php echo "$r1" ?>"/>
    <input type="hidden" name="ran2" value="<?php echo "$r2" ?>"/>
    <input type="hidden" name="ran3" value="<?php echo "$r3" ?>"/>
    <input type="hidden" name="po1" value="<?php echo "$p1" ?>"/>
    <input type="hidden" name="po2" value="<?php echo "$p2" ?>"/>
    <input type="hidden" name="po3" value="<?php echo "$p3" ?>"/>
    <input type="hidden" name="po4" value="<?php echo "$p4" ?>"/>
    
        <input type = "submit" value="Enviar">
      

        </form>
        <form name="rangos"  method="get" action="rangos.php">
        <input type = "submit" value="editar">
        </form>
    </section>

	<footer>
	
	</footer>
	
    
	</body>
	
	</html>