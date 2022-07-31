<?php

function br(){
    echo "<br>";
}

class Produk{
    public $bakwan,
            $bakso,
            $jmlBakwan,
            $jmlBakso,
            $hargaBakwan,
            $hargaBakso,
            $totalSeluruh,
            $totalHargaBakwan,
            $totalHargaBakso;
    
    function __construct()
    {
        $this->hargaBakwan = 2000;
        $this->hargaBakso = 10000;
    }        
}

class jumlah extends Produk{
    public function getJumlah($jmlBakwan,$jmlBakso){
        $this->jmlBakwan = $jmlBakwan;
        $this->jmlBakso = $jmlBakso;
    }

    public function setHarga(){
        $this->totalHargaBakwan = $this->jmlBakwan * $this->hargaBakwan;
        $this->totalHargaBakso = $this->jmlBakso * $this->hargaBakso;
        $this->totalSeluruh = $this->totalHargaBakwan + $this->totalHargaBakso;
    }

    public function cetakStruk(){
        echo "******** <b>$ ikantin gemink $</b> ********<br>";
        br();
        echo "Bakwan : $this->jmlBakwan X Rp. $this->hargaBakwan : <b>$this->totalHargaBakwan</b>";
        br();
        echo "Bakso : $this->jmlBakso X Rp. $this->hargaBakso : <b>$this->totalHargaBakso</b>";
        br();
        br();
        echo "Total Bayar : Rp. <b>$this->totalSeluruh</b>";
        br();
        echo "*******************************************";
    }
}
?>