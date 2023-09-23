
<h1>Welcome To Page 2</h1>
<hr>
<b><u>Anda berada pada halaman 2</u></b><br> <?php
include "pratikum3-14_koneksimysql.php";
include "pratikum3-14_validasi.php";
session_start();
$userID="";
$password="";
if(isset($_SESSION['userID'])){
$userID=$_SESSION['userID'];
}
if(isset($_SESSION['password'])){
$password=$_SESSION['password'];
}
if(!validasi_user($userID, $password)){ header('location: pratikum3-14_login.html');

}
echo "User Anda adalah: ".$userID;
?>
<br><br>
Navigasi ke : <br>
Page 2
<a href="pratikum3-14_page1.php">Page1</a>