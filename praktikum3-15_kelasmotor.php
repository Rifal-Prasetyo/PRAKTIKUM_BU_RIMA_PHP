<?php 
    class Motor{
        public $merk;
        public $warna;
        public $nopol;
        public function __construct($merk, $warna, $nopol){
            $this->merk=$merk;
            $this->warna=$warna;
            $this->nopol=$nopol;

            echo "<br><br>Konstruktor pada motor $this->merk dijalankan</br></br>";
        }
        
        function __destruct(){
            echo "<br><br>Destruktor pada motor $this->merk dijalankan</br></br>";
        }

        public function getMerk(){
            return $this->merk;
        }

        public function getWarna(){
            return $this->warna;
        }

        public function getNopol(){
            return $this->nopol;
        }

        public function getDetails(){
            echo "Motor ini ber merk $this->merk, berwarna $this->warna dan bernomor polisi $this->nopol";
        }
    }
