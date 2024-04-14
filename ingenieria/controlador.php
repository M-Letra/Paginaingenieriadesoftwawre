<?php 
	if (!empty($_POST["btningresar"]))
	{
		if (empty($_POST["usuario"]) && empty ($_POST["password"])) {
			echo "LOS CAMPOS ESTÁN VACÍOS";
		}
		else {
			$usuario= $_POST["usuario"];
		$clave= $_POST["password"];
		$sql=$conn->query ("select * from usuarios where nombre=$usuario and contrasena=$clave");
		if ($datos=$sql->fetch_object()){
			header("location:index.php");
		} else {
			echo "La contraseña y el usuario no coinciden";
		}
		}
	}
 ?>