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
        <a class="nav-link" href="/ENGR-372/ENGR372/dashboard.php">Hesap Makinesi<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/hakan/area.php">Alan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/hakan/length.php">Uzunluk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/omer/volumeConverter.php">Hacim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/omer/weightConverter.php">Ağırlık</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/riza/force.php">Güç</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/riza/speed.php">Hız</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/zeynep/angleConverter.php">Açı</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ENGR-372/ENGR372/zeynep/timeConverter.php">Zaman</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/ENGR-372/ENGR372/logout.php">Çıkış</a>
      </li>
    </ul>
    
        ';
    }
    echo '
  </div>
</nav>
</header>';
}