<?php
    define('host', 'localhost');
    define('user', 'root');
    define('password','');
    define('database', 'pendataan');

    $coon=mysqli_connect(host,user,password, database);
    if (!$coon) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
        echo "Koneksi Berhasil";
?>
