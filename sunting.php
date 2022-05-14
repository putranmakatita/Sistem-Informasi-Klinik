<?php
require 'function.php';
$title = 'daftar';
$id = $_GET['data'];
$old_data = lihat($id);
if(!isset($_SESSION['login'])){
    header('location: login.php?m=rejection');
    exit;
}
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
    if(isset($_POST['sunting']) && sunting($_POST, $id)){  
        header("location: daftar-pasien.php?m=sunting");       
    }
    ?>

    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3 mx-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $old_data['nama']?>" required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $old_data['alamat']?>" required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="penyakit" class="form-label">Penyakit</label>
                    <input type="text" class="form-control" name="penyakit" id="penyakit" value="<?= $old_data['penyakit']?>" required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <textarea type="textarea" class="form-control" name="keluhan" id="keluhan" required><?= $old_data['keluhan']?></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mx-3" name="sunting">Sunting!</button>
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>