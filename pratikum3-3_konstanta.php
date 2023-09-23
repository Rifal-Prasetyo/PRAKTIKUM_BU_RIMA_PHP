<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konstanta</title>
</head>
<body>
    <?php 
    define("pi", 3,14);
    $jari2 = 6 ;

    echo "Diketahui jari-jari : $jari2<br>";
    echo "Maka luas lingkaran: " . (pi*$jari2*$jari2) . "<br><hr>";
    echo "Kode ini ditulis pada PHP versi    : " . PHP_VERSION;

    ?>
</body>
</html>