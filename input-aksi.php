<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    // echo "<script>alert('tes')</script>"
    // echo $nama, $alamat, $pekerjaan;
    mysqli_query($db, "INSERT INTO id_user VALUES('','$nama','$alamat','$pekerjaan')");
    header("location:index.php?pesan=input");
?>