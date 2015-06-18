<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet"  type="text/css" href="diseño/estilos.css">
	<title>Labo6</title>
</head>

<body>
<div id="caja">
    <h2>Inicio de Sesion</h2>
    <form action="validar.php" method="post">
         <tr>
         	<td>
         		<label ><h3>Usuario</h3></label>
         	</td>
         	<td width=80>
         		<input  type="text" name="usuario" placeholder="Usuario">
         	</td>
         </tr>
         <tr>
         	<td>
         		<label ><h3>Contraseña</h3></label>
         	</td>
         	<td width=80>
         		<input  type="password" name="pass1"placeholder="Contraseña">
         	</td>
         </tr>
         <tr>
         	<td>
         		<td wigth=80 >
         			<input type="submit" value="Aceptar">
         		</td>
         	</td>
         </tr>
    </form>
</div>
</body>