<?php

class Laptop {

    public $name;
    public $laptop;

    public function __construct($name, $laptop) {

        $this->name = $name;
        $this->laptop = $laptop;
    }

    public function show() {
        echo "laptop <b>$this->laptop</b> milik : <b>$this->name</b> <br>";
    }
}

$lap1 = new Laptop('Dina', '1');
echo $lap1->show();
$lap2 = new Laptop('Anto', '2');
echo $lap2->show();
$lap3 = new Laptop('Andi', '3');
echo $lap3->show();