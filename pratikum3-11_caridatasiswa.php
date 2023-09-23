<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Siswa</title>
</head>
<style>
    table>th {
        background-color: yellow;
    }
</style>
<body>
    <h1>Data Siswa</h1>
    <hr>
    <?php 
    include "pratikum3-11_koneksimysql.php";

    ?>
    <a href="pratikum3-11_inputdatasiswa.html">Input Data Siswa</a><br><br>
    <table border="1" width="800">
        <tr bgcolor="green">
            <td><font color="white">Nis</font></td>
            <td><font color="white">Nama</font></td>
            <td><font color="white">Alamat</font></td>
            <td><font color="white">Jenis Kelamin</font></td>
            <td><font color="white">Nilai</font></td>
            <td><font color="white">Edit/hapus</font></td>

        </tr>
        <?php 
        $strfilter = $_GET['cmbfilter'];
        $strcari = $_GET['txtcari'];
        if($strfilter == 'nis') {
            $sql = "SELECT * FROM web_datasiswa WHERE nis like '%$strcari%'";
        } else {
            $sql = "SELECT * FROM web_datasiswa WHERE nama like '%$strcari%'";
        }

        $query = mysqli_query($coon, $sql) or die(mysqli_error($coon));
        while($data= mysqli_fetch_array($query)) {

        
        ?>
        <tr>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['jeniskel'] ?></td>
            <td><?= $data['nilai'] ?></td>
            <td>
                <a href="pratikum3-11_updatedatasiswa.php?nis=<?=$data['nis']?>">
            <img src="image/edit.jpeg" alt="edit" srcset="" width="15" height="15"></a> /
            <a href="pratikum3-11_deletedatasiswa.php?nis=<?= $data['nis'] ?>">
              <img src="image/delete.jpeg" alt="delete" srcset="" width="15" height="15"></a></td>

        </tr>
        <?php 
        }
        ?>

    </table>
</body>
</html>