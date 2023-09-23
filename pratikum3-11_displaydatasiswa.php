<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displa Data SIswa</title>
</head>
<body>
    <h1>Data SIswa</h1>
    <hr>
    <?php 
    include "pratikum3-11_koneksimysql.php";
    ?>
    <a href="pratikum3-11_inputdatasiswa.html">Input Data</a><br><br>
    <table border="1" width="800">
        <tr bgcolor="green">
            <td><font color="white">Nis</font></td>
            <td><font color="white">Nama</font></td>
            <td><font color="white">Alamat</font></td>
            <td><font color="white">Jeniskel</font></td>
            <td><font color="white">Nilai</font></td>
            <td><font color="white">Edit/hapus</font></td>

        </tr>
        <?php 
        $sql = "SELECT * FROM web_datasiswa ORDER BY nis";
        $hasil = mysqli_query($coon, $sql);
        while ($data= mysqli_fetch_array($hasil)) {
        ?>
        <tr>
            <td><?= $data['nis'] ;?></td>
            <td><?= $data['nama'] ;?></td>
            <td><?= $data['alamat'] ;?></td>
            <td><?= $data['jeniskel'] ;?></td>
            <td><?= $data['nilai'] ;?></td>
            <td>
                <a href="pratikum3-11_updatedatasiswa.php?nis=<?= $data['nis'] ?>">
                <img src="image/edit.jpeg" alt="edit" srcset="" width="15" height="15"></a> /
                <a href="pratikum3-11_deletedatasiswa.php?nis=<?= $data['nis'] ?>">
                <img src="image/delete.jpeg" alt="delete" srcset=""></a>
            </td>
        </tr>
        <?php 
        }
        ?>

    </table>
    <br>
    <form action="pratikum3-11_caridatasiswa.php" method="get">
        <table>
            <tr>
                <td>Cari Mahasiswa</td>
                <td>
                    <select name="cmbfilter" id="">
                        <option value="nis">NIS</option>
                        <option value="nama">Nama</option>
                    </select>

                </td>
                <td><input type="text" name="txtcari" id="" size="50"></td>
                <td><input type="submit" value="Cari" name="btncari"></td>
            </tr>
        </table>
    </form>
</body>
</html>