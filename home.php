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


  <nav class="navbar navbar-expand-lg bg-dark sticky-top" style="margin:24px 0;">
    
    <a class="navbar-brand" href="javascript:void(0)"><img src="img/BalderWhite.png" class="smallLogo" alt="Logo" height="50%" width="50%"></a>
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navb">

      

      <ul class="navbar-nav mr-auto">
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn my-2 my-sm-0" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </button>
        <a id="perfil" href="#"><img src="img/profile1.jpg" class="rounded-circle mx-auto" align="center" height="20%" width = "20%"></a>
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

</body>

</html>