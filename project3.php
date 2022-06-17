<?php
function getmoney(){

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "test2";
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  $proj="Water";
  $sqlnew = "SELECT SUM(cantidad) as total FROM donations WHERE Proj = '$proj'";
  $query = mysqli_query($conn,$sqlnew);
  $result = mysqli_fetch_assoc($query);


  return $result;
}

?>
<!DOCTYPE html>

<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>GreenFunding | Proyecto air</title>
    <meta name="description" content="Proyecto aire">
    <meta property="og:title" content="GreenFunding">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="projects.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 


    
</head>
<body>
    
    <div class="tituloproyecto">

      Save the air

    </div>


    <div class="header">


        <div class="topnav">
          <a href="index.html">Home</a>
          <a href="index.html">Proyectos</a>
          <a href="index.html">Contact</a>
          <a href="login.html">Login</a>
        </div>


    </div>

            <div class="page-block --light">
            <div class="page-block__content --narrow">
                <div class="page-block-header">
                    
                    <div class="page-block-header__heading">
                        <h3 class="text-heading --size-3 --text-aling-center">Proyecto para limpiar el aire</h3>
                    </div>
                    
                   

                </div>
                <div class="fotos">
                    
                  <div class="container">
                       
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                  
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="Images/clean-air-pollution.jpg" alt="clean-air-pollution.jpg" style="width:100%;">
                        </div>
                  
                        <div class="item">
                          <img src="Images/clean-air-pollution2.jpg" alt="clean-air-pollution2.jpg" style="width:100%;">
                        </div>
                      
                        <div class="item">
                          <img src="Images/clean-air-pollution3.jpg" alt="clean-air-pollution3.jpg" style="width:100%;">
                        </div>
                      </div>
                  
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  


            </div>
            <div class="bar1" action="http://localhost/PaginaWebProyeecto/action_page.php">

              <div style="padding: 3vh; font-size: 18px;">Dinero recaudado:</div>
              <?php 



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test2";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$proj="Air";
$sqlnew = "SELECT SUM(cantidad) as total FROM donations WHERE Proj = '$proj'";
$query = mysqli_query($conn,$sqlnew);
$result = mysqli_fetch_assoc($query);
$money=$result["total"];


echo" <div class='progressbar1' > <progress class='progressbar' max='10000' value=$money></progress>"




?></div>
              <button onclick="document.location='registrar_pago.php'" class="btn">Contribuir</button>

            </div>

                <div class="descripcion">
                        
                    <p> 
                      Es de suma importancia cambiar el ritmo de vida que llevamos, a este paso las nuevas generaciones 
                      no tendrán un lugar digno para vivir aunque tal vez ni siquiera tengan un lugar. La sociedad tiene 
                      un comportamiento apático ante el cambio climático, lamentablemente... por ello todos debemos poner 
                      nuestro granito de arena, que aunque no sea mucho como plantar un árbol, reutilizar los plásticos o dejar 
                      de utilizar bolsas, ya es un cambio y un buen inicio para mejorar nuestra forma de vida. Recuerda, el cambio 
                      está en uno mismo, sé el cambio que quieres ver en el mundo.<br>

                      Este proyecto se centrara en la plantación de arboles y la creacion de zonas green, repletos de plantas que ayudara no solo 
                      para purificar el aire sino agradar a la vista.
                        
                    </p>


                </div>

                    
                </div>
                <hr class="rounded">

                <footer class="footer">
                  <p>GreenFunding<br>
                  <a href="Greenfunding@gmail.com">GreenFunding@gmail.com</a></p>
                </footer>
            </body>
</html>