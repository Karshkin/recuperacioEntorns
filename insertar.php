<?php
  include("datos.php");
  include("funcions.php");

 if(conectarBDA($host,$usuario,$clave,$bda)){

     if($insertado=insertar($_POST["nif"], $_POST["nombre"], $_POST["direccion"], $_POST["telefono"], $_POST["pais"])){
     	echo "La insercion se ha realizado correctamente";
      }
  }else{
  	echo "error";
  }
?>