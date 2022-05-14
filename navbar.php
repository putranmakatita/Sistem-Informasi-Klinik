<?php
session_start();
?>
<nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <h2 class="navbar-brand" href="#">Sistem Informasi Klinik Inova</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <?php if(isset($_SESSION['login'])) { ?>
              <li class="nav-item">
                <a class="nav-link <?php if($title == "daftar"){ ?>
                    active
              <?php } ?>"  href="daftar-pasien.php">Daftar tindakan pasien</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($title == "tambah"){ ?>
                    active
              <?php } ?>" href="tambah-data-pasien.php">Tambah data pasien</a>
              </li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link <?php if($title == "logout"){ ?> active <?php } ?>" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
            <?php } else { ?>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link <?php if($title == "login"){ ?>
                  active
            <?php } ?>" aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($title == "register"){ ?>
                  active
            <?php } ?>"  href="register.php">Register</a>
            </li>
          </ul>
              <?php }?>
              
        </div>
      </div>
    </nav>