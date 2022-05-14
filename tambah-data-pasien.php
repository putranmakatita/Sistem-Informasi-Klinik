<?php
require 'function.php';
$title = 'tambah';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   
    <?php 
    require 'navbar.php';
    if(!isset($_SESSION['login'])){
        header('location: login.php?m=rejection');
        exit;
    }

    if(isset($_POST['tambah'])){
        if (tambah($_POST)){ ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>Data berhasil ditambahkan!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php 
    }
    }
    ?>

    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3 mx-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="penyakit" class="form-label">Penyakit</label>
                    <input type="text" class="form-control" name="penyakit" id="penyakit" required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <textarea type="textarea" class="form-control" name="keluhan" id="keluhan" required></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mx-3" name="tambah">Tambahkan!</button>
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>