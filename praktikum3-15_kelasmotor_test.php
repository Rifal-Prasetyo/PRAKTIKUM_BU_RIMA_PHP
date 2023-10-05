<?php
    include "praktikum3-15_kelasmotor.php";

    $beat = new Motor ("Beat FI STD", "Biru", "R5253CW");

    echo "Motor Merk ".$beat->getMerk(). "dengan warna ".$beat->getWarna(). " telah dibeli";
    echo "<br>";
    $beat->getDetails();

    $Vixion = new motor("Vixion 150", "Hitam", "R4243AM");
    echo "Motor yang terperangkap bermerk ".$Vixion->getMerk(). " Dengan No. Polisi ". $Vixion->getNopol();
    echo "<br>";
    $Vixion->getDetails();
