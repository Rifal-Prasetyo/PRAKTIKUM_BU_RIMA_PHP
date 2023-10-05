<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// include "praktikum3-16_orang.php";
include "praktikum3-16_siswa.php";

$anjani = new Siswa("12344", "Anjani", "Jerukwangi", "P", 90.0);
$arendra = new Siswa("12343", "Ariendra", "Jerukwangi", "P", 92.0);

$anjani->simpan();
$arendra->simpan();
