<?php
require 'function.php';
$title = 'daftar';
$pasiens = query_data("SELECT * FROM rekam_pasien");


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
    <?php 
    if(isset($_GET['m'])){
        if($_GET['m'] == 'selesai'){ 
    ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>Pasien telah selesai diambil tindakan!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php 
        } 
        else if($_GET['m']== 'sunting'){ 
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>Data berhasil disunting!</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        
    <?php 
        }
    
        else if($_GET['m'] == 'regist'){ 
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>Berhasil registrasi!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        }
        else if ($_GET['m'] == 'login'){ ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>Berhasil login!</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php 
        }
    } ?>


    

    

    <table class="table table-bordered mx-4 mt-4 w-auto">
    <thead>
        <tr>
        <th scope="col" width="20">No.</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Penyakit</th>
        <th scope="col">Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1; 
        foreach($pasiens as $pasien){?>
            <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $pasien['nama']?></td>
            <td><?= $pasien['alamat']?></td>
            <td><?= $pasien['penyakit']?></td>
            <td>
                <a href="lihat.php?data=<?= $pasien['id'] ?>">Lihat detail</a>
                <a href="sunting.php?data=<?= $pasien['id'] ?>">Sunting</a>
                <a href="selesai.php?data=<?= $pasien['id'] ?>">Selesai</a>
            </td>
            </tr>
        <?php $i++; } ?>
    </tbody>
    </table>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>