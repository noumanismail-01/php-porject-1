<?php session_start() ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/myweb/assets/style.css">
  </head>
  <body class="bg-dark">
  <nav class="navbar navbar-expand-lg bg-dark-subtle ">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="/myweb/">MY Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/myweb/index.php">Home</a>
        </li>
        <?php if(!isset($_SESSION["username"])){?>
        <li class="nav-item">
          <a class="nav-link" href="/myweb/signup.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myweb/login.php">Login</a>
        </li>
        <?php }?>
        <li class="nav-item">
          <a class="nav-link" href="/myweb/about.php">About us</a>
        </li>
        <?php 
        if(isset($_SESSION["username"])){?>
          <li class="nav-item">
            <a class="nav-link" href="/myweb/logout.php"><?php echo $_SESSION["username"]?></a>
          </li>
        <?php }?>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
    
