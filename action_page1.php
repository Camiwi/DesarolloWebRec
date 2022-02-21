<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test2";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$proj = $_POST["Proj"];
$dona = $_POST["cantidad"];


$sql = "SELECT SUM(cantidad) as total FROM donations WHERE Proj = '$Air'";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($query);
$resultstring = $result['total'];

echo '<div class="progressbar"><progress max="100" value="50"></div>';

?>