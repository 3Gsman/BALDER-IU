<!DOCTYPE html>
<html lang="es">

<head>
  <title>BALDER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
  
  <script src="js/scripts.js"></script>
  <link rel="stylesheet" href="css/css.css">

  <!-- <link rel="icon" href="img/icono.ico"> -->

</head>

<body>


<?php include 'chat.php'?>
  <span class="position-absolute trigger">
    <!-- hidden trigger to apply 'stuck' styles --></span>

    

  <nav class="navbar navbar-expand-lg bg-dark sticky-top">
    
    <a class="navbar-brand mx-auto" href="home.php"><img src="img/BalderWhite.png" class="smallLogo" alt="Logo" height="50%" width="50%"></a>
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
      <img src="img/list.png" class="rounded-circle mx-auto my-1" align="center" height="100%" width = "100%">
    </button>

    <div class="navbar-collapse collapse" id="navb">
     
      <ul class="navbar-nav mr-auto">
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <a id="perfil" href="perfil.html" class="mx-auto"><img src="img/profile1.jpg" class="rounded-circle mx-auto" align="center" height="20%" width = "20%"></a>
        <button type="button" class="btn btn-dark" onclick="location.href = 'index.html';">Logout</button>
      </form>
           
    </div>

  </nav>


  <div class="container">

    <div class="row">

      <!--<div class="col-sm-1"></div>-->

      <div class="col-sm-12">

        <div class="card">

          <div id="users" class="description card-body">

          </div>

          <!--<div class="col-sm-1"></div>-->

        </div>

      </div>
    </div>
  </div>



<footer class=" mt-5 page-footer font-small">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Balder.com</a>
    <button type="button" class="btn btn-light" onclick="location.href = 'faq.html';">FAQ</button>
  </div>
  <!-- Copyright -->

</footer>


</body>

</html>