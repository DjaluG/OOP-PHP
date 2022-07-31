<?php

class Orang{
	private $nama;
	function __construct($nama){ //pembuatan constructor
		$this->nama=$nama;
		echo "Contructor: $this->nama Lahir <br>";
	}
	function UcapSalam(){
		echo "Hallo. Nama Saya adlh ".$this->nama."<br>";
	}
	function __destruct(){ //pembuatan destructor
		echo "Destructor: $this->nama Mati <br>";
	}
}
?>