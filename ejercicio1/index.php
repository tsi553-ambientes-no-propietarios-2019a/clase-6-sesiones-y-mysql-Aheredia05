<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><center>Login</h1>
	
	<form action="php/inicio.php" method="POST">
	<center><input type="text" name="username" placeholder="Usuario"> 
  <br>
  <br>
		<input type="password" name="password" placeholder="Password">
		<br>
    <br>
    <button>Ingresar</button>
		
	</center>
	</form>

	</center>
</body>
</html>