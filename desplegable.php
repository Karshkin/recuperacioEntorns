<?php
  include("datos.php");
  include("funcions.php");

  if(conectarBDA($host,$usuario,$clave,$bda)){
  	 //echo "ok";
     $label="Proveedores";
     $name="proveedores";
     $query="SELECT nif, nombre FROM proveedores";

     if($paquete=consultar($query)){

	  	 $codigoMenu=generarMenuSeleccion($paquete,$name,$label);

	  	echo $codigoMenu;
      echo '<a href="mostrarDatos.php">Mostrar datos</a>';
      }
  }else{
  	echo "error";
  }


?>