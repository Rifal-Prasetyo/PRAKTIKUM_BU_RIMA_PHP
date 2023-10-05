<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Orang
{
    private $nama;
    private $alamat;
    private $jeniskel;

    function __construct($nama, $alamat, $jeniskel)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jeniskel = $jeniskel;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function getJeniskel()
    {
        return $this->jeniskel;
    }
}
