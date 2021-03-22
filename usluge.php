

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
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
    <!-- Bootstrap CSS -->
    <script src="https://use.fontawesome.com/cdbdeebaea.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="style.css">
    <title>A MI MANERA</title>
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
        background-repeat: no-repeat; "></i></a>
  			
  	
            <li class="nav-item">
            <a href="index.php?lang=rs"><i class="flag flag-serbia"></i></a>
            </li>
            
         </ul>
      </div>
   </nav>
   



      <header class="header__usluge">
         </div> 
         
         <h1 class="heading-primary">
         </h1>
      </header>
      <div class="container">
         <div class="partneri" style="padding-top: 10vh; ">
            <div class="naslov" style="  ">
               <h2><?php echo $lang['naslov1'] ?>
               </h2>
               <hr class="new1">
            </div>
            <div class="tekst">
            <?php echo $lang['tekst1'] ?>
            </div>
         </div>
      </div>
      <div class="polje__ekspertize__druga">
         <div class="container naslov">
            <h2><?php echo $lang['sredKon'] ?></h2>
            <hr class="new1">
         </div>
      </div>
      <div class="container">
         <div class="partneri" style="padding-top: 10vh; ">
            <div class="naslov" style="  ">
               <h2><?php echo $lang['naslov2'] ?>
               </h2>
               <hr class="new1">
            </div>
            <div class="tekst">
            <?php echo $lang['tekst2'] ?>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="partneri" style="padding-top: 10vh; ">
            <div class="naslov" style="  ">
               <h2><?php echo $lang['naslov3'] ?>
               </h2>
               <hr class="new1">
            </div>
            <div class="tekst">
            <?php echo $lang['tekst3'] ?>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="partneri" style="padding-top: 10vh; ">
            <div class="naslov" style="  ">
               <h2><?php echo $lang['naslov4'] ?></h2>
               <hr class="new1">
               <div class="linija"></div>
            </div>
            <div class="tekst">
            <?php echo $lang['tekst4'] ?>
            </div>
         </div>
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
                                www.amimanera.rs</p></div>
                            </div>
                            


                          </footer>
            
                          <div class="footer2">© Copyright A mi manera</div>

      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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