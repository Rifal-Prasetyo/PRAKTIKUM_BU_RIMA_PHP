<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Array</title>
</head>
<body>
    <h1>Demo Array</h1>
    <hr>
    <?php 
    $kota = array("Jakarta", "Bandung", "Semarang", "Jrakah", "Surabaya", "Maluku", "Denpasar", "Pontianak", "Medan", "Palangkaraya", "Irian Jaya" );



    echo "Kota ke 3 adalah $kota[2]<br><br><br>";
    echo "Mencetak isi array dengan perlaman for <br>";
    for($i = 0; $i<count($kota); $i++) {
        echo "Kota ke $i adalah kota $kota[$i]<br>";
    }

    echo "<br><br><br>Mencetak isi array dengan foreach<br>";
    foreach ($kota as $kt) {
        echo $kt . "<br>";
    }
    ?>
</body>
</html>