<?php
    define('host', 'localhost');
    define('user', 'cobadeh');
    define('password','indonesia');
    define('database', 'latihan_session');

    $coon=mysqli_connect(host,user,password, database);
    if (!$coon) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
        echo "Koneksi Berhasil";
