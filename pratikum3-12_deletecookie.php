<?php
unset($_COOKIE['user']);
setcookie('user','',time()-3600);
if(!isset($_COOKIE['user'])){
header("location:pratikum3-12_cookieerror.php");
}
?>