<?php
  include("datos.php");
  include("funcions.php");

  if(conectarBDA($host,$usuario,$clave,$bda)){
  	 //echo "ok";
     $label="Proveedores";
     $name="proveedores";
     $query='SELECT * FROM proveedores WHERE nif="568"';

     if($paquete=consultar($query)){

	  	echo $paquete;
      }
  }else{
  	echo "error";
  }

  ?>