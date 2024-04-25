<?php
class laptop {
    protected $pemilik="Anto";
    public function akses_pemilik(){
        return $this->pemilik;
    }
    public function getlaptop(){
        return $this->pemilik;
    }
    protected function hidupkan_laptop(){
        return "Hidupkan Laptop";
    }
    public function paksa_hidup(){
        return $this->hidupkan_laptop();
    }
    public function gethidup(){
        return $this->hidupkan_laptop();
    }
}
$laptop_anto = new laptop();
echo $laptop_anto->akses_pemilik();
echo "<br>";
echo $laptop_anto->getlaptop();
echo "<br>";
echo $laptop_anto->paksa_hidup();
echo "<br>";
echo $laptop_anto->gethidup();