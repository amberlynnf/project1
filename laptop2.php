<?php 
class laptop {
    public $owner = "Andi";
    public $brand = "Lenovo";

    public function __construct(){
        echo "Ini berasal dari constructor Laptop";
    }

    public function hidupkanlaptop(){
        return "Hidupkan Laptop <b>$this->brand</b> punya <b>$this->owner</b>";
    }

    public function __destruct(){
        echo "Ini berasal dari Destructor Laptop";
    }
}
$laptop_milik_Andi = new laptop();

echo "<br/>";
echo $laptop_milik_Andi->hidupkanlaptop();
echo "<br/>";
