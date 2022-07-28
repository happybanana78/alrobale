<?php 
  require_once "vendor/autoload.php";

  session_start();

  use alrobale\Slide;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Agriturismo Al Robale</title>
    <meta
      name="description"
      content="Agriturismo al robale official website"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  </head>
  <body class="bg-image">

    <header id="home">
      <nav class="navbar navbar-expand-lg navbar-light navbar-custom-1 py-3">
        <div class="container">
          <a href="#" class="navbar-brand">
            <img src="../assets/img/logo.png" alt="" width="140">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-5 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rooms">Camere</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#where">Dove Siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contatti</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menù
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Menù Ferragosto 2022</a></li>
                </ul>
              </li>
            </ul>
            <?php if (isset($_SESSION["userid"])) { 
              echo "<strong class='me-3 fs-5'>" . $_SESSION["username"] . "</strong>";  
            ?>
              <form action="includes/logout.inc.php" method="post">
                <button type="submit" class="btn btn-brown btn-lg" name="logout">Logout</button>
              </form>
            <?php } else { ?>
              <button type="button" class="btn btn-brown btn-lg" data-bs-toggle="modal" data-bs-target="#signup-pop">Registrati</button>
              <button type="button" class="btn btn-brown btn-lg ms-3" data-bs-toggle="modal" data-bs-target="#login-pop">Login</button>
            <?php } ?> 
          </div>
        </div>
      </nav>
    </header>

    <?php include_once "modules/login.php" ?>
    <?php include_once "modules/sign_up.php" ?>