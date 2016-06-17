 <?php 
 include("datos.php");

  function conectarBDA($host,$usuario,$clave,$bda){

  	if(!$enlace = mysql_connect($host,$usuario,$clave)){
  		return false;
  	}elseif (!mysql_select_db($bda)){
  		return false;
  	}else{
  		return true;
  	}
  }

   function consultar($consulta){
     if(!$datos = mysql_query($consulta) or mysql_num_rows($datos)<1){
       return false;
     }else{
      return $datos;
     }
  }

  function generarMenuSeleccion($datos,$name,$label){
     $codigo = '<label>' . $label . ' </label>' . "\n";
     $codigo = $codigo . '<select name="' . $name . 
     '">' . "\n";

     while($fila=mysql_fetch_array($datos)){
       $codigo= $codigo . '<option value="' . $fila["nif"] . '">'
        . $fila["nif"] . '</option>' . "\n";
     }

     $codigo = $codigo . "</select>\n";

     return $codigo;
  }

  function insertar($nif, $nombre, $direccion, $telefono, $pais){
  $query="INSERT INTO proveedores(nif, nombre, direccion, telefono, pais) VALUES($nif, '$nombre', '$direccion', '$telefono', '$pais')";

  if(!$insercion = mysql_query($query)){
       return false;
     }else{
      return $insercion;
     }

  }

  function sacarDatos($consulta){
    echo "$consulta";
  }

  ?>