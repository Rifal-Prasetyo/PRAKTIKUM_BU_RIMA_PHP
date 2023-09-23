<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi - fungsi Array</title>
</head>
<body>
<h1>Demo Fungsi Array</h1>
<hr>
<?php
    $kota = array ("Jakarta", "Bandung", "Semarang", "Jrakah", "Surabaya", "Maluku", "Denpasar", "Pontianak", "Medan", "Palangkaraya", "Irian Jaya"); 
    echo "Nilai Array Kota adalah :";
    foreach ($kota as $kt)
    {
        echo $kt.", ";
    } 
    echo "<br><br><b> Setelah diurutkan dengan fungsi sort </b>"; 
    echo "<br>Nilai Array Kota Menjadi :";

    sort($kota);
    foreach($kota as $kt)
    {
        echo $kt. ", ";
    }

    echo "<br><br><b> Setelah ditambahkan kota Makasar dan Palembang dengan array_push</b>"; 
    echo "<br> Nilai Array Kota Menjadi :"; 
    array_push ($kota, "Makasar", "Palembang");
    foreach ($kota as $kt)
    {
        echo $kt. ", ";
    }
        echo "<br><br><b>Memeriksa nilai array dengan in_array()</b>"; 
        echo "<br>Apakah kota Surabaya tersimpan pada array? :".in_array("Surabaya", $kota);

   echo "<br><br><b>Mengambil elemen terakhir dengan fungsi shuffle()</b>"; 
        echo "<br>Nilai Array Kota Menjadi :";
        shuffle ($kota);
        foreach ($kota as $kt)
        {
            echo $kt. ", ";
        }

        echo "<br><br><b>Mengambil elemen terakhir dengan fungsi array_pop()</b>"; 
        echo "<br>Nilai Array Kota Menjadi :";
        array_pop ($kota);
        foreach ($kota as $kt)
        {
            echo $kt. ", ";
        }
?>
</body>
</html>