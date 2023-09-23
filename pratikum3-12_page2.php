<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Page 1</h1>
<hr>
<b><u>Anda Berada di halaman 2</u></b><br>

<?php
if (!isset($_COOKIE['user'])) {
header("location:pratikum3-12_cookieerror.php");
}
echo "User anda adalah : ".$_COOKIE['user'];
?>
<br><br>
Navigasi ke : <br>
<a href="pratikum3-12_page2.php">Page1</a>!
<a href="pratikum3-12_page3.php">Page3</a>
<a href="pratikum3-12_deletecookie.php">Hapus Cookie</a>
</body>
</html>

