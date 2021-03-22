
<?php
    include "config.php";
?>

<!doctype html>
<html lang="<span><?php echo $lang['srlng'] ?>">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <!-- MDB -->
<!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/> -->
      <!-- Bootstrap CSS -->
      <script src="https://use.fontawesome.com/cdbdeebaea.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/> -->
    <title>A MI MANERA</title>


      <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          const uluru = { lat: -25.344, lng: 131.036 };
          // The map, centered at Uluru
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: uluru,
          });
          // The marker, positioned at Uluru
          const marker = new google.maps.Marker({
            position: uluru,
            map: map,
          });
        }
      </script>
   </head>
  <body>
    

  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
      <!-- <div class="mx-auto d-sm-flex d-block flex-sm-nowrap"> -->
      <a class="navbar-brand" href=""> <img src="./png/Logo.png" alt="logo" class="logo"></a>
      <button class="navbar-toggler mr-left custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="nav navbar-nav navbar-primary w-100 ml-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">
               <span><?php echo $lang['about us'] ?></span>
               <span class="sr-only">(current)</span>
               </a>
            </li>
            
            <li class="nav-item">
               <a class="nav-link" href="usluge.php">
               <span><?php echo $lang['services'] ?></span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="partneri.php">
               <span><?php echo $lang['partners'] ?></span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="kontakt.php"><span><?php echo $lang['contact'] ?></span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="mailto: office@amimanera.rs"><span>EMAIL</span></a>
            </li>
         </ul>
         
         <ul class="nav navbar-nav navbar-secondary flex-row justify-content-center flex-nowrap">
            <li class="nav-item">
            
  			<a href="index.php?lang=en" ><i class="flag flag-united-states " style="background-size: contain;
        background-position: 100%;
        background-repeat: no-repeat; "></i> </a>
  			
  	
            <li class="nav-item">
            <a href="index.php?lang=rs"><i class="flag flag-serbia"></i></a>
            </li>
            
         </ul>
      </div>
   </nav>
   
      <header class="header__kontakt">
         </div> 
         </nav>
         <h1 class="heading-primary">
         </h1>
      </header>
   

      <div class="map">
        <h2><?php echo $lang['konKOn'] ?>
        </h2>
        <hr class="new1">


        <div class="social">
            
            <div class="social1">
            <p>office@amimanera.rs <br>
            www.amimanera.rs
            
            
            </p>
        </div>
        
        <div class="social1">
        
            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
            
            </div>
            
            </div>
        
      
    <!--The div element for the map -->
    <div id="map"></div>

</div>
      
     
<footer class="footer">
                            <div class="separator"></div>

                            
                            <div class="flex-grid">
                              <div class="col1">
                                <img src="png/Logo white.png" alt="">


                              </div>
                              <div class="col"><div>
                                
                                <ul><li><a>NAVIGATION</a> </li>
                                <li><a href="index.php"><?php echo $lang['homefo'] ?></a></li>
                               
                                <li><a href="partneri.php"><?php echo $lang['partnersfo'] ?></a></li>
                                <li><a href="usluge.php"><?php echo $lang['servicesfo'] ?></a></li>
                                <li><a href="kontakt.php"><?php echo $lang['contactfp'] ?></a></li>
                              </ul>
                                
                     
                                
                              </div>
                              <div class="col"><p><?php echo $lang['contactfp'] ?> <br>
                                <br>

                                office@amimanera.rs <br>
                                <br>
                                www.amimanera.rs</p>
                                
                                <br>
                                
                                
           
                                </div>
                                
                                
                            </div>
                

                          </footer>
            
                          <div class="footer2">© Copyright A mi manera</div>

      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
      
      <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkRUu1j4vC1v-wo5-HvAQZOi646huHS2Q&callback=initMap">
</script>
      <script src="main.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
         -->
   </body>
</html>