<?php

include("conexion.php");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test2";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$nombre = $_POST["usuario"];
$pass = $_POST["pass"];

if (isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' AND password ='$pass'");
    $nr = mysqli_num_rows($query);
    $query2 = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre'");
    $nr2 = mysqli_num_rows($query2);

    if($nr==1)
    {
        echo "<script> alert('Bienvenido $nombre'); window.location='donationPage.php'</script>";

    }else
    {
        echo "<script> alert('Usuario no existe'); window.location='login_pago.php'</script>";
    }
}

if (isset($_POST["btnregistrar"]))
{


    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' AND password ='$pass'");
    $nr = mysqli_num_rows($query);
    $query2 = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre'");
    $nr2 = mysqli_num_rows($query2);

    if($nr2==1)
    {
        echo "<script> alert('El usuario ya existe'); window.location='registrar_pago.php'</script>";

    }else
    {
        $sqlgrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')";

        if(mysqli_query($conn,$sqlgrabar))
        {
            echo "<script> alert('Usuario Registrado Correctamente'); window.location='donationPage.php'</script>";
            session_start();
            /*session is started if you don't write this line can't use $_Session  global variable*/
            $_SESSION["newsession"]="usuario";
            echo $_SESSION["newsession"];
    
        }else
        {
            echo "Error: ".sql."<br>".mysql_error($conn);
        }
    }
}
?>