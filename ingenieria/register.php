<?php 
    require 'conexion.php';

    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
        
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];
        if ($pass == $cpass) {
            $sql = "INSERT INTO usuarios (nombre, contrasena) VALUES (:username, :password)";
             $stmt = $conn -> prepare($sql);
              $stmt->bindParam(':username', $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
             if ($stmt->execute())
             {
                 $message = 'Se ha creado un nuevo usuario correctamente';
             } else {
                 $message = 'Lo lamento, ha ocurrido un error';
             }
        }
        else 
        {
            $message = 'Las contraseñas no coinciden';
        }
    echo "$message";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <?php 
        if(!empty ($message)): ?>
            <p><?php $message ?></p>
        
    <?php endif; ?>
    <a href="index.html"><button type="button">Regresar</button></a>
 <h2>Registrarse</h2>
    <form action="#" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
          <label for="cpassword">Confirmar contraseña:</label>
        <input type="password" id="cpassword" name="cpassword" required><br><br>
        <input type="submit" name="send">
    </form>
</body>
</html>