<?php





?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>GreenFunding | Proyecto agua</title>
    <meta name="description" content="Proyecto agua">
    <meta property="og:title" content="GreenFunding">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="projects.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 


    
</head>
<body>
    
    <div class="tituloproyecto">

        Save the water

    </div>


    <div class="header">


        <div class="topnav">
          <a href="index.html">Home</a>
          <a href="index.html">Proyectos</a>
          <a href="index.html">Contact</a>
          <a href="login.php">Login</a>
        </div>
    </div>

            <div class="page-block --light">
            <div class="page-block__content --narrow">
                <div class="page-block-header">
                    
                    <div class="page-block-header__heading">
                        <h3 class="text-heading --size-3 --text-aling-center">Peticion de limpieza de mares y oceanos</h3>
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

                              <img src="Images/Water1.jpg" alt="water 1" style="width:100%;">
                            </div>
                      
                            <div class="item">
                              <img src="Images/water 2.jpg" alt="water 2" style="width:100%;">  
                            </div>
                          
                            <div class="item">
                              <img src="Images/water 3.jpg" alt="water 3" style="width:100%;">
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
  $proj="Water";
  $sqlnew = "SELECT SUM(cantidad) as total FROM donations WHERE Proj = '$proj'";
  $query = mysqli_query($conn,$sqlnew);
  $result = mysqli_fetch_assoc($query);
  $money=$result["total"];


  echo" <div class='progressbar1' > <progress class='progressbar' max='10000' value=$money></progress>"




?></div>
                  <button onclick="document.location='login_pago.php'" class="btn">Contribuir</button>

                </div>

                <div class="descripcion">
                        <div>
                    <p> 
                      Los oceanos se mueren y nosotros con él. El plastico ha inundado nuestros mares 
                      y oceanos y su limpieza y protección debe ser una de las prioridades de nuestra sociedad y gobiernos.
                      <br>

                      Dedicar esfuerzos humanos, capital y dinero en la recuperación de nuestro mar y sus especias tiene que ser 
                      immediata y efectiva si queremos tener vida en los próximos 30 años. 
                      <br>
                      Algo tan sencillo como un cubo de basura que flota y succiona desperdicios puede recoger grandes cantidades de botellas 
                      de plástico, papel, aceite, detergente, e incluso combustible que se encuentra en nuestros mares. Seabin va absorbiendo 
                      los desechos que hay en la superficie y los acumula en el interior del cubo.
                      <br>

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