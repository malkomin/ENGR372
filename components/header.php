<?php

function getHeader($pageName)
{
    if(session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();
    }
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>' . $pageName . '</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
    </head>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" >Converter Plus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  ';
    if(isset($_SESSION["auth"]) && $_SESSION["auth"])
    {
        echo '
        <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Ana Sayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Hesap Özellikleri</a>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link" href="logout.php">Çıkış</a>
      </li>
    </ul>
    <ul class="navbar-nav justify-content-end">
            <li class="nav-item ">
                    <a class="nav-link" href="" data-bs-target="#myModal" data-bs-toggle="modal">About</a>
            </li>
    </ul>
    
        ';
    }
    echo '
  </div>
</nav>
</header>';
}