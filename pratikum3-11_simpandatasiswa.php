<?php 
include "pratikum3-11_koneksimysql.php";

$nis = $_POST['txtnis'];
$nama = $_POST['txtnama'];
$alamat = $_POST['txtalamat'];
$jeniskel = $_POST['rdjeniskel'];
$nilai = $_POST['txtnilai'];

$sql = "INSERT INTO web_datasiswa(nis, nama, alamat, jeniskel, nilai) VALUES ('$nis', '$nama', '$alamat', '$jeniskel', '$nilai' )";
$hasil = mysqli_query($coon, $sql);
if($hasil){
    echo "New Record Created Succcesfully";
    header('location:pratikum3-11_inputdatasiswa.html');

} else {
    echo "<center> Data gagal disimpan, error" . mysqli_error($coon);
    echo "<hr><a href='pratikum3-11_inputdatasiswa.html'> Kembali</a></center>";
}
?>