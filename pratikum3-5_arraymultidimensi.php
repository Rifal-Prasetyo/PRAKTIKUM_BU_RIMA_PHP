<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum Array Multidimensi</title>
</head>
<body>
    <h1>Demo Arraay Multidimensi</h1>
    <hr>
    <?php 
   $peserta = array ("PHP" => array("Rifal", "Yuan", "Akmal"),
                    "Delphi" => array ("Rully", "Rasya"),
                    "C++" => array ("Rega", "Arya", "Glendu", "Unais"),
                    "Perl" => array ("Sani"));

    echo "<b><u> Daftar Peserta Khusu </u> : </b><br>";
    // while (list($indeks1, $nilai1)=each($peserta))
    // {
    //     echo "<b> Peserta $indeks1</b><br><ol>";
    //     while (list($indeks2,$nilai2)=each($nilai1))
    //     {
    //         echo "<li>$nilai2</li><br>";
    //     }
    //     echo "</ol>";
    // }
    foreach($peserta as $indeks1 => $nilai1) {
        echo "<b> Peseta $indeks1 </b><br><ol>";
        foreach($nilai1 as  $indeks2 => $nilai2) {
            echo "<li>$nilai2</li><br>";
        }
        echo "</ol>";
    }
   ?>
</body>
</html>