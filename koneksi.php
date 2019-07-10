<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "db_regis";

    $db = mysqli_connect($server, $user, $password, $nama_database);
    echo"Berhasil terkoneksi....";

    if(!$db){
            die("gagal terhubung dengan database : ". mysqli_connect_error());
        } 
?>