<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h1>Input Data</h1>
    <form action="pratikum3-13_simpankecookie.php" method="post">
        <table>
            <tr>
                <td width=120>Nis</td>
                <td><input type="text" name="txtnis" id="" size="10"></td>
            </tr>
            <tr>
                <td width=120>Nama</td>
                <td><input type="text" name="txtnama" id="" size="30"></td>
            </tr>
            <tr>
                <td width=120>Alamat</td>
                <td><input type="text" name="txtalamat" id="" size="60"></td>
            </tr>
            <tr>
                <td width="120">&nbsp;</td>
                <td><input type="submit" value="kirim"><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
    <hr>
    <?php 
    if(!isset($_COOKIE['pegawai'])) {
        $dataawal = array();
        setcookie('pegawai', serialize($dataawal));
    }
    ?>
    Data Tersimpan pada sesi <br>
    <?php 
    $peg = array();
    if(isset($_COOKIE['pegawai'])) {
        $peg = unserialize($_COOKIE['pegawai']);
    }
    echo "<table width=100% border=1 cellspacing=1>
    <tr bgcolor='CCCCCC'>
        <td>NIS</td>
        <td>NAMA</td>
        <td>ALAMAT</td>
    </tr>
";

foreach($peg as $p) {
    echo "<tr>
    <td>". $p['nis']."</td>
    <td>". $p['nama']."</td>
    <td>". $p['alamat']."</td>
    
</tr>";
}
echo "</table>"
    ?>



    
    
</body>
</html>