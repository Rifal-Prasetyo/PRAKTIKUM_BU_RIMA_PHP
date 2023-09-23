<?php 
include "pratikum3-11_koneksimysql.php";

$nis = $_POST['txtnis'];
$nama = $_POST['txtnama'];
$alamat = $_POST['txtalamat'];
$jeniskel = $_POST['rdjeniskel'];
$nilai = $_POST['txtnilai'];

$sql = "UPDATE web_datasiswa SET nama= '$nama', alamat= '$alamat', jeniskel= '$jeniskel', nilai= '$nilai' WHERE nis= '$nis'";

$hasil = mysqli_query($coon, $sql);
if($hasil){
    header('location:pratikum3-11_displaydatasiswa.php');

} else {
    echo "<center>Data Gagal Diubah" . mysqli_error($coon);
    echo "<hr><a href-'pratikum3-11_displaydatasiswa.php'> Kembali</a></center>";
}

?>