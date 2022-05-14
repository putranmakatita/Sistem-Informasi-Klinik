<?php
require 'function.php';
$title = 'register';
if(isset($_POST['regist']) && register($_POST)){
    header('location: daftar-pasien.php?m=regist');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   
    <?php 
    require 'navbar.php';
    ?>

    <main class="form-registration">
    <form class="mt-4 d-flex flex-column justify-content-center align-items-center" action="" method="post">

        <h1 class="h3 my-3 fw-normal text">Regist to Klinik Inova!</h1>
        
        <div class="form-floating w-50">
        <input autofocus required type="text" class="form-control" name="nama" id="nama" placeholder="Nama anda">
        <label for="nama">Name</label>
        </div>

        <div class="form-floating w-50">
        <input required type="text" class="form-control" id="username" name="username" placeholder="username">
        <label for="username">Username</label>
        </div>

        <div class="form-floating w-50">
        <input required type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <label for="email">Email address</label>
        </div>
        
        <div class="form-floating w-50">
        <input required type="password" class="form-control" name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
        </div>
        
        <button class="w-50 btn btn-lg btn-primary" type="submit" name="regist">Regist!</button>
        <p><small>have already registered? <a class="text-decoration-none" href="login.php">Log in here</a></small></p>
    </form>
    </main>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>