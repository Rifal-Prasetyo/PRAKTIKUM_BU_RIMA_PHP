<?php 
$nis= ""; $nama=""; $alamat="";
if(isset($_POST['txtnis'])) {
    $nis = $_POST['txtnis'];
}
if(isset($_POST['txtnama'])) {
    $nama = $_POST['txtnama'];
}
if(isset($_POST['txtalamat'])) {
    $alamat = $_POST['txtalamat'];
}

$pegawai = array();
if(isset($_COOKIE['pegawai'])) {
    $pegawai = unserialize($_COOKIE['pegawai']);
}

$tmppegawai = array("nis"=>$nis, "nama"=>$nama, "alamat"=> $alamat);
array_push($pegawai, $tmppegawai);
setcookie('pegawai', serialize($pegawai));
header('location:pratikum3-13_input.php');

?>