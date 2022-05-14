<?php
require 'function.php';

$id = $_GET['data'];

if(!isset($_SESSION['login'])){
   header('location: login.php?m=rejection');
   exit;
}
if(hapus($id)){ 
   header("location: daftar-pasien.php?m=selesai");
} ?>
