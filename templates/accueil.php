<!doctype html>
<html lang="en">
  <head>
    <title>ACCUEIL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../public/style/style.css" rel="stylesheet">
  </head>
  
  <body>
      <div class="container" id="cont">
        <header class="row">
          <div class="row text-light mt-2 text-center mx-auto d-block col-12">
            <h2 class=" section-heading text-center  ml-5  display-auto font-weight-bold">BIENVENUE SUR LE CAMPUS INNOV-DEV DE SONATEL ACADEMY</h2>
          </div>
          <div class="row">
             <nav class="navbar navbar-expand-lg navbar-expand-xlg navbar-expand-md navbar-expand-sm navbar-expand-xs float-center d-block navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="accueil.php">ACCUEIL <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="accueil.php?lien=etudiant">ETUDIANTS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="accueil.php?lien=chambre">CHAMBRES</a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>
        </header>
          <?php
            if(isset($_GET["lien"])){
              if($_GET['lien']=="etudiant"){
                require_once "etudiant.php";
              }elseif($_GET['lien']=="chambre"){
                require_once "chambre.php";
              }elseif($_GET['lien']=="ajouteretudiant"){
                require_once "savetudiant.php";
              }elseif($_GET['lien']=="ajouterchambre"){
                require_once "savechambre.php";
              }
            }
            ?> 
      </div>
  </body>
    <footer>
        <label class="text-center text-light ml-5 mx-auto d-block float-center">copyright @ INNOV-DEV 2020</label>
    </footer>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
