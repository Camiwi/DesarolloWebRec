<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registrar</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='login_register.css'>
    
</head>
<body>
    <div class="form1">
        <form action="http://localhost/PaginaWebProyeecto/login_registrar.php" method="post">
            <h2>Crear una cuenta</h2>
            <input type="text" placeholder= "Usuario" name="usuario" required>
            <input type="password" placeholder= "Contraseña" name="pass" required>
            <input type="submit" vale= "Registrar" name="btnregistrar">

            <br>
            <a href="login.html" style="float:right">Ya tengo cuenta</a>
        </form>
    </div>
</body>
</html>