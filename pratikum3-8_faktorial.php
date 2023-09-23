<?php
    function getFaktorial($angka) {
       $hasil=1;
       for ($i=1;$i<=$angka;$i++) {
        $hasil=$hasil*$i;
      }
      return $hasil;
    }
        
     echo "<h1>Demo fungsi faktorial</h1><hr>";
     echo "Nilai Faktorial dari angka 6 adalah :".getFaktorial(6);
?>