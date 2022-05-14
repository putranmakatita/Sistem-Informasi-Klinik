<?php
$connection = mysqli_connect('localhost', 'root', '', 'rs_inova');


function query_data($query){
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows_data = [];
    while ($data = mysqli_fetch_assoc($result)){
        $rows_data[] = $data;
    }

    return $rows_data;
}

function lihat($data){
    global $connection;
    $result = mysqli_query($connection, "SELECT * FROM rekam_pasien WHERE id= $data");
    $res_data = mysqli_fetch_assoc($result);
    return $res_data;
}

function tambah($data){
    global $connection;
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $penyakit = $data['penyakit'];
    $keluhan = $data['keluhan'];

    $query = "INSERT INTO rekam_pasien VALUES('', '$nama', '$alamat', '$penyakit', '$keluhan')";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function hapus($data){
    global $connection;
    $query = "DELETE FROM rekam_pasien WHERE id = $data";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function sunting($data, $id){
    global $connection;
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $penyakit = $data['penyakit'];
    $keluhan = $data['keluhan'];
    $query = "UPDATE rekam_pasien 
    SET `nama` = '$nama', `alamat` = '$alamat', `penyakit` = '$penyakit', `keluhan` = '$keluhan' 
    WHERE `rekam_pasien`.`id` = $id";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function register($data){
    global $connection;
    $nama = $data['nama'];
    $username = $data['username'];
    $email = $data['email'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES('', '$nama', '$username', '$email', '$password')";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}
