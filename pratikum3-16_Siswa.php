<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('host', 'localhost');
define('user', 'cobadeh');
define('password', 'indonesia');
define('database', 'pendataan');

require "pratikum3-16_Orang.php";
class Siswa extends Orang
{
    private $nis;
    private $nilai;

    function __construct($nis, $nama, $alamat, $jeniskel, $nilai)
    {
        parent::__construct($nama, $alamat, $jeniskel);
        $this->nis = $nis;
        $this->nilai = $nilai;
    }

    public function getNis()
    {
        return $this->nis;
    }

    public function getNilai()
    {
        return $this->nilai;
    }

    public function simpan()
    {
        $conn = mysqli_connect(host, user, password, database);
        if ($conn) {
            $query = "insert into web_datasiswa(nis,nama,alamat,jeniskel,nilai) values ('" . $this->getNis() . "','" . $this->getNama() . "',
                '" . $this->getAlamat() . "','" . $this->getJenisKel() . "'," . $this->getNilai() . ")";

            $hasil = mysqli_query($conn, $query);
            if ($hasil) {
                echo "<u>Siswa dengan data berikut<u> : <br>
                    Nis : " . $this->getNis() . "<br>
                    Nama : " . $this->getNama() . "<br>
                    Alamat : " . $this->getNilai() . "<br><br>
                    Nilai : " . $this->getNilai() . "<br><br>
                    Telah berhasil ditambahkan pada tabel... <hr>";
            } else {
                echo mysqli_connect_error();
            }
        } else {
            echo mysqli_connect_error();
        }
        mysqli_close($conn);
    }
}
