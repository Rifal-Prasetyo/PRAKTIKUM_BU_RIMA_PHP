<?php
$gelarDepan = $_POST['cmbGelarDepan'];
$nama = $_POST['txtNama'];
$alamat = $_POST['txtAlamat'];
$gelarBelakang = $_POST['cmbGelarBelakang'];

echo "SELAMAT DATANG <span style='color: blue; font-weight:bold;'>  " . $gelarDepan . " " . $nama . ", " . $gelarBelakang . "</span><br>";
echo "Alamat anda di <span style='font-weight:bold; text-decoration: underline;'>" . $alamat . "</span>" ;

?>
