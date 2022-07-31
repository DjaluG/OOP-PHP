<?php
class animal{
    public $nama;
    public $umur;
    public $jenishidup;

    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setJenisHidup($jenishidup){
        $this->jenishidup=$jenishidup;
}

public function getcetak(){
    echo "Nama Animal: ".$this->nama;
    echo "</br>";
    echo "Jenis Hidup: ".$this->jenishidup;
    echo "</br> ===================================== </br>";
 }
}

$jerapah= new Animal();
$jerapah->setNama("Jerapah Afrika");
$jerapah->setJenisHidup("Darat");
$jerapah->getcetak();

$burung= new Animal();
$burung->setNama("Burung Garuda");
$burung->setJenisHidup("Udara");
$burung->getcetak();
?>


