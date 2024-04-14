<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <h2>Iniciar Sesión</h2>
    <form id="loginForm" onsubmit="return login()">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Iniciar Sesión</button>
    </form>

    <script>
	function login() {
    	var username = document.getElementById('username').value;
    	var password = document.getElementById('password').value;

    // Verifica las credenciales (simulado)
    if ((username === 'Noe Joaquin' && password === 'tochotio1') || (username === 'Moisés Adrián' && password === 'DUNE')) {
        alert('Inicio de sesión exitoso');
        window.location.href = "trabajo_software.html"; // Redirige a la página principal si las credenciales son válidas
    } else {
        alert('Usuario o contraseña incorrectos');
    }
    return false; // Evita el envío del formulario

        }
    </script>
</body>
</html>