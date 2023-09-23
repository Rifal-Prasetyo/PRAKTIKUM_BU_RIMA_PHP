<?php 
    include "pratikum3-11_koneksimysql.php";
    $nis = $_REQUEST['nis'];
    $sql = "SELECT * FROM web_datasiswa WHERE nis='$nis'";
    $hasil = mysqli_query($coon, $sql);
    $data = mysqli_fetch_array($hasil);

    $nis = '';
    $nama = '';
    $alamat = '';
    $jeniskel = '';
    $nilai = '';

    if($data) {
        $nis = $data['nis'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $jeniskel = $data['jeniskel'];
        $nilai = $data['nilai'];
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Siswa</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <hr>
    <form action="pratikum3-11_proseseditdatasiswa.php" method="POST">
        <table border="0" width="600">
            <tr>
                <td width="120" bgcolor="green"> <font color="white">Nis</font></td>
                <td><input type="text" name="txtnis" id="" value="<?= $nis ?>"></td>
            </tr>
            <tr>
                <td width="120" bgcolor="green"> <font color="white">Nama</font></td>
                <td><input type="text" name="txtnama" id="" value="<?= $nama ?>"></td>
            </tr>
            <tr>
                <td width="120" bgcolor="green"> <font color="white">Alammat</font></td>
                <td><input type="text" name="txtalamat" id="" value="<?= $alamat ?>"></td>
            </tr>
            <tr>
                <?php 
                $rdL = ''; $rdP = '';
                if($jeniskel == "L") {
                    $rdL = "checked";
                } else {
                    $rdP = "checked";
                }
                ?>
                <td width="120" bgcolor="green"><font color="white">Jenis Kelamin</font></td>
                <td><input type="radio" name="rdjeniskel" id="" value="L" <?= $rdL ?>>Laki-Laki &nbsp;
                <input type="radio" name="rdljeniskel" id="" value="P" <?= $rdP ?>>Perempuan </td>

            </tr>
            <tr>
                <td width="120" bgcolor="green"><font color="white">Nilai</font></td>
                <td><input type="text" name="txtnilai" id="" size="5" maxlength="4" value="<?= $nilai ; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah" style="width: 100px;">
                <input type="button" value="Kembali" style="width: 100px;" onclick="back()">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>