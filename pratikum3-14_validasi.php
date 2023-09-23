
<?php
function validasi_user($user, $password){
$userID=$user;
$password= $password;
echo password;
$conn=mysqli_connect(host, user, password, database);
$hasil="select * from web_sessionuser where userID='$userID' and password=md5('$password')"; 
$query=mysqli_query($conn, $hasil) or die (mysqli_connect_error());
if($data=mysqli_fetch_array($query)){
return true;
}else {
return false;
}
}