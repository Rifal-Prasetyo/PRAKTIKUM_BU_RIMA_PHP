

<?php
include "pratikum3-14_koneksimysql.php"; include "pratikum3-14_validasi.php";
$userID=""; $password="";
if(isset($_POST['txtuser'])){
$userID=$_POST['txtuser'];
}
if(isset($_POST['txtpassword'])){
$password=$_POST['txtpassword'];
}
if(validasi_user($userID, $password)){ session_start();
$_SESSION['userID']=$userID; $_SESSION['password']=$password;
header('location:pratikum3-14_page1.php');
} else {
session_start();
unset($_SESSION['userID']);
unset($_SESSION['password']);
echo "<center><h3>User atau Password tidak sesuai ...</h3> <hr>
<a href='pratikum3-14_login.html'>Kembali</a></center>";
}