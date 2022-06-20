<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    
    <link rel='stylesheet' href='login_register.css'>

</head>
<body>
    <div class="form1">
        <form action="http://localhost/PaginaWebProyeecto/login_registrar.php" method="post">
            <h2>Iniciar Sesion</h2>
            <input type="text" placeholder= "Usuario" name="usuario" required>
            <input type="password" placeholder= "Contraseña" name="pass" required>
            <input type="submit" vale= "Ingresar" name="btningresar">

            <br>
            <a href="registrar.php" style="float:right">Crear una cuenta</a>
    
        </form>
    </div>
</body>
</html>