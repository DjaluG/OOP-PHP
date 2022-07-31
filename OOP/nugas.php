<?php
class mobil{
    public $kondisi;
    public $merk;
    public $nama;
    public $warna;
    public $kecepatan;

    public function inputDataMobil($kondisi,$merk,$nama,$warna,$kecepatan){
        $this->kondisi=$kondisi;
        $this->merk=$merk;
        $this->nama=$nama;
        $this->warna=$warna;
        $this->kecepatan=$kecepatan;
    }
        public function getcetak(){
        echo 'Kondisi Mobil '.$this->kondisi;
        echo '<br>';
        echo 'Merk Mobil: '.$this->merk;
        echo '<br>';
        echo 'Nama Mobil: '.$this->nama;
        echo '<br>';
        echo 'Warna Mobil: '.$this->warna;
        echo '<br>';
        echo 'Kecepatan Mobil: '.$this->kecepatan;
        echo '<br> ======================================== <br>';
    }
}
$mobil= new mobil ();
$mobil->inputDataMobil("Maju","Toyota","Fortuner","Hitam","250");
$mobil->getcetak();

$mobil= new mobil ();
$mobil->inputDataMobil("Mundur","Honda","Brio","Hijau","100");
$mobil->getcetak();




?>