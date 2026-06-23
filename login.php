<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Admin</title>

<link rel="stylesheet" href="hola.css">

</head>

<body>

<main class="login-container">

<div class="login-card">

<h2>Administrador BINCOL</h2>

<form action="validar_login.php" method="POST">

<input type="text"
name="usuario"
placeholder="Usuario"
required>

<input type="password"
name="clave"
placeholder="Contraseña"
required>

<button type="submit">
Ingresar
</button>

</form>

</div>

</main>

</body>
</html>