<?php
      $server = 'localhost:1330';
      $user = 'root';
      $pass = '123456';
      $db = 'impuestos';   
      $conectar = mysqli_connect($server, $user, $pass,$db) or die ("Error en la conexion");
      return $conectar;
?>