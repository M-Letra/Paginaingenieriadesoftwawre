<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <h2>Iniciar Sesión</h2> 
 <a href="index.html"><button type="button">Regresar</button></a>
    <form method="post" action=>
      <?php 
      include ("conexion.php");
      include ("controlador.php");
       ?><br>
        <label>Usuario:</label>
        <input type="text" name="usuario"><br><br>
        <label>Contraseña:</label> 
        <input type="password" name="password"><br><br>       
        <input type="submit" name="btningresar">
    </form>

</body>
</html>