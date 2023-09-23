<?php 
include "pratikum3-11_koneksimysql.php";

$nis = $_GET['nis'];


$sql = "DELETE FROM web_datasiswa WHERE nis='$nis'";
$hasil = mysqli_query($coon, $sql);
if($hasil){
    header('location:pratikum3-11_displaydatasiswa.php');

} else {
    echo "hapus data siswa gagal, error: " . mysqli_error($coon);
}


?>