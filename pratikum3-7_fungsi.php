<?php
    function cetakKata($kata) {
    $kata=strtoupper($kata); //mengubah jadi huruf besar .kalau huruf kecil strtolower
    echo"<p style='font-weight:bold'> $kata </p>";
    }
    cetakkata("Selamat Datang");
    cetakKata("Temanku");
?>