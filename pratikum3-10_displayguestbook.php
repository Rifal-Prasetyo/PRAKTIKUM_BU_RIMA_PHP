<?php
    define('host','localhost');
    define('user','root');
    define('password','');
    define('database','rifal');

    $conn=mysqli_connect(host,user,password,database);

    $sql="select * from web_guestbook order by id";

    $query=mysqli_query($conn, $sql) or die (mysqli_connect_error());

    $no=1;
    while ($data=mysqli_fetch_array($query)){
    ?>

    <table widht=400 border=1>
        <tr>
            <td colspan="2"> <?php echo "No : ".$no; ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $data['name'];?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $data['email'];?></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><?php echo $data['date'];?></td>
        </tr>
        <tr>
            <td colspan ="2" height="100" valign="top"><?php echo $data['comment'];?></td>
      <tr>
    </table>
    <br>
    <?php
        $no++;
    }
    ?>