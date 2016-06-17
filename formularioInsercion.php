<?php
echo'
<form method="post" action="insertar.php">

	<fieldset>

		<legend> Ingrese sus datos </legend>

		<label> NIF </label>

		<input type="text" name="nif"/>

		<p>

		<label> Nombre </label>
		<input type="text" name="nombre"/>
		</p>

		<p>

		<label> Direccion </label>
		<input type="text" name="direccion"/>
		</p>

		<p>

		<label> Telefono </label>
		<input type="text" name="telefono"/>
		</p>

		<p>

		<label> Pais </label>
		<input type="text" name="pais"/>
		</p>



		<p>

			<input type="submit" value="Enviar"/>
		</p>'	
?>