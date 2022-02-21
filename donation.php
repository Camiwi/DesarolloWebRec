<?php

include("conexion.php");

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test2";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$proj = $_POST["Proj"];
$dona = $_POST["cantidad"];



if (isset($_POST["btningresarProy"]))
{   
 
    $sqlgrabar = "INSERT INTO donations(Proj,cantidad) values ('$proj','$dona')";
    $sql = "SELECT SUM(cantidad) as total FROM donations WHERE Proj = '$proj'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    $resultstring = $result['total'];
    
    if(mysqli_query($conn,$sqlgrabar))
    
    {
        
        echo "<script> alert('Donacion Recibido, Total: $resultstring'); window.location='index.html'</script>";
        
        session_start();
        $_SESSION["newsession"]="usuario";
        echo $_SESSION["newsession"];

    }else
    {
        echo "Error: ".sql."<br>".mysql_error($conn);
    }
}
?>