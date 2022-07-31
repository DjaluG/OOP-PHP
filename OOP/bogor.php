<?php
class user{
    private $name="Rehan";
    private $address="Bogor";

    public function showBio()
    {
        echo "Nama saya $this->name dan saya berasal dari $this->address";
    }
    //destructor
    public function __destruct()
    {
        echo ' Ini dari destruktor. ';
    }
    //constructor
    public function __construct()
    {
        echo 'ini dari konstruktor. ';
    }
}

//membuat object $eliff
$eliff = new User();

//panggil method dari object $eliff
echo $eliff->showBio();
?>