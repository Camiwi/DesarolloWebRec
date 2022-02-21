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

    if($nr==1)
    {
        echo "<script> alert('Bienvenido $nombre'); window.location='index.html'</script>";

    }else
    {
        echo "<script> alert('Usuario no existe'); window.location='login.html'</script>";
    }
}

if (isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')";


    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Usuario Registrado Correctamente'); window.location='index.html'</script>";
        session_start();
        /*session is started if you don't write this line can't use $_Session  global variable*/
        $_SESSION["newsession"]="usuario";
        echo $_SESSION["newsession"];

    }else
    {
        echo "Error: ".sql."<br>".mysql_error($conn);
    }
}
?>