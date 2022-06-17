<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contribuir</title>
    
    <link rel='stylesheet' href='login_register.css'>

</head>
<body>
    <div class="form1">
        </form>
        <form action="http://localhost/PaginaWebProyeecto/donation.php" method="post">
            <input type="text" placeholder= "Cantidad" name="cantidad" required>
            <label for="Project">Choose a Project:</label>
            <select id="Proj" name="Proj" size="3" multiple>
              <option value="Air">Air</option>
              <option value="Water">Water</option>
              <option value="Land">Land</option>
            </select><br><br>
            <input type="submit" value= "Ingresar" name="btningresarProy">

        </form>
    </div>
</body>
</html>