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

        <input type = "submit" value="Enviar">

        </form>

    </section>

	<footer>
	
	</footer>
	
	</body>
	
	</html>