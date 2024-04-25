<?php
class computer {
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";

    public function tampilkan_processor(){
        echo $this->jenis_processor;
    }

    public function getprocessor(){
        echo $this->jenis_processor;
    }
}
$computer_baru = new computer();
echo $computer_baru->tampilkan_processor();
echo "<br/>";
echo $computer_baru->getprocessor();