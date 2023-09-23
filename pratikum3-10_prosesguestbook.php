<?php
    define('host','localhost');
    define('user','root');
    define('password','');
    define('database','rifal');

    $conn=mysqli_connect(host,user,password,database);

    if (!$conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
        echo "Connected successfully";

$nama=$_POST['txtname'];
$email=$_POST['txtemail'];
$comment=$_POST['txtcomment'];
$date = date('Y-m-d');

$sql="insert into web_guestbook (id,name,email,date,comment) values (NULL, '$nama','$email','$date','$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
      } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   mysqli_close($conn);
?>