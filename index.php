<!DOCTYPE html>

<html lang= "es">

<head>

<meta charset="utf-8">

<title>Impuesto vehicular</title>

</head>

<body>
    <body bgcolor="#87C9A0">
        <div id= "Contenidos">
        <header>
         <center><font face= "Brush Script MT"><FONT SIZE= "8" ><H1 style="color: #40604D;"> Calculo de impuestos</H1></FONT></font></center>
        </header>
    
        <section id= "content">
	
        <center><font face= "Brush Script MT"> <font size="6"><h3>Datos del vehiculo:</h3></font></font></center> 
	   <form name="cuestionario"  method="get" action="guardarimpu.php">
		
       <p><label><center><font face= "Century Gothic"><FONT SIZE= "4">Marca:</FONT></FONT></center></label>
		<center><input type="text" name="Marca"></p></center>
        
        <p><label><center><font face= "Century Gothic"><FONT SIZE= "4">Linea:</FONT></FONT></center></label>
        <center><input type="text" name="Linea"></p></center>
		
        <p><label><center><font face= "Century Gothic"><FONT SIZE= "4">Modelo:</FONT></FONT></center></label>
        <center><input type="text" name="Modelo"></p></center>

        <p><label><center><font face= "Century Gothic"><FONT SIZE= "4">Valor:</FONT></FONT></center></label>
        <center><input type="text" name="Valor"></p></center>

		
		<center><font face= "Brush Script MT"> <font size="6"><h3>Descuentos:</h3></font></font></center> 
		
        <p>
        <label for="op1">
		<center><font face= "Century Gothic"><input type="checkbox" id="op1" name="descuento[]" value="a"> Pronto pago</FONT></center>
        </label>

        <label for="op2">
		<center><font face= "Century Gothic"><input type="checkbox" id="op2" name="descuento[]" value="b"> Translado de cuenta</FONT></center>
		</label>
        
        <label for="op3">
		<center><font face= "Century Gothic"><input type="checkbox" id="op3" name="descuento[]" value="c"> Servicio publico</FONT></center>
        </label>
        </p>
        
    <input type="hidden" name="ran1" value="<?php echo "$r1" ?>"/>
    <input type="hidden" name="ran2" value="<?php echo "$r2" ?>"/>
    <input type="hidden" name="ran3" value="<?php echo "$r3" ?>"/>
    <input type="hidden" name="po1" value="<?php echo "$p1" ?>"/>
    <input type="hidden" name="po2" value="<?php echo "$p2" ?>"/>
    <input type="hidden" name="po3" value="<?php echo "$p3" ?>"/>
    <input type="hidden" name="po4" value="<?php echo "$p4" ?>"/>
    <center><font face= "Century Gothic"><input type = "submit" value="Enviar"></FONT></center>
      

        </form>
        <form name="rangos"  method="get" action="rangos.php">
        <center><font face= "Century Gothic"><input type = "submit" value="Editar"></FONT></center>
        </form>
    </section>
	<footer>
    <CENTER><H5>GUIA 3 Ingenieria de software II</H5></CENTER>
    <CENTER><H5>ING. Fernando Sotelo</H5></CENTER>
    <CENTER><h6>Xiomara Fernanda Jimenez Aya - Anderson Andres Gonzalez Hernandez - Jeisson Felipe Torres Huerfano</h6></CENTER>
	</footer>
	</div>
    
	</body>
	
	</html>