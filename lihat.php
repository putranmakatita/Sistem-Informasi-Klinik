<?php
require 'function.php';
$title = 'daftar';
$id = $_GET['data'];
$pasien = lihat($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   
    <?php 
    require 'navbar.php';
    if(!isset($_SESSION['login'])){
      header('location: login.php?m=rejection');
      exit;
    }
    ?>

    <ul class="col-lg-8 mt-4 mx-auto">
      <h3>Profil pasien</h1>
        <li>Nama: <?= $pasien['nama'] ?></li>
        <li>Alamat: <?= $pasien['alamat'] ?></li>
        <li>Penyakit: <?= $pasien['penyakit'] ?></li>
        <li>Keluhan: <?= $pasien['keluhan'] ?></li>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
