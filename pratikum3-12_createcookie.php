<?php
if(isset($_POST['txtuser']))
{
//menciptakan cookie dengan waktu expire 20 detik
setcookie ("user", $_POST['txtuser'],time()+20);
header("location:pratikum3-12_page1.php");
} else
{
header("location:pratikum3-12_inputUser.html");
}