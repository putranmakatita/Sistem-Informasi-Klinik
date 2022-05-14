<?php
require 'function.php';
$title = 'login';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   
    <?php 
    require 'navbar.php';
    if(isset($_POST['login'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE Username = '$username'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result)){
            $rows = mysqli_fetch_assoc($result);
            if(password_verify($password, $rows['password'])){
                $_SESSION['login'] = true;
                header('Location: daftar-pasien.php?m=login');
                exit;
            }
        }
    }
    ?>

    <main class="form-signin">
    <form action="" method="post" class="mt-4 d-flex flex-column justify-content-center align-items-center">
        <h1 class="h3 my-3 fw-normal">Login to Klinik Inova!</h1>
        
        <div class="form-floating w-50">
            <input name="username" type="text" id="username" class="form-control" autofocus required>
            <label for="username">Username</label>
        </div>
        
        <div class="form-floating w-50">
            <input name="password" type="password" class="form-control" placeholder="Password" id="password" required>
            <label for="password">Password</label>
        </div>
        
        <button class="w-50 btn btn-lg btn-primary" type="submit" name="login">Log in</button>
        <p><small>not registered yet? <a class="text-decoration-none" href="register.php">Regist here</a></small></p>
    </form>
    </main>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>