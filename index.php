<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="apple-touch-icon" sizes="57x57" href="imgs/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="imgs/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="imgs/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="imgs/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="imgs/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="imgs/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="imgs/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="imgs/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="imgs/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="imgs/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="imgs/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="imgs/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="imgs/fav/favicon-16x16.png">
<link rel="manifest" href="imgs/fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="imgs/fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  </head>
  <body class="bg-boy">

    <?php include("connect.class.php"); ?>
    <?php include("functions.class.php"); ?>

    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12 mt-5">
          <img src="imgs/breno.jpg" class="img-fluid rounded-circle col-8 img-breno">


          <?php 
            $list_get_user = mysqli_fetch_array($get_status);
            $list_breno_status = $list_get_user['breno_status'];

            if($list_breno_status == 1){
              echo "<h2 class='text-color breno-status mt-3'>Gente estou dormindo <h6 class='text-color'>zZzZZz</h6></h2>"; 
            }
            if($list_breno_status == 2){
              echo "<h2 class='text-color breno-status mt-3'>Venham me visitar, estou acordado</h2>"; 
            }
            if($list_breno_status == 3){
              echo "<h2 class='text-color breno-status mt-3'>Atenção!!! Estou mamando</h2>"; 
            }
          ?>
          
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>