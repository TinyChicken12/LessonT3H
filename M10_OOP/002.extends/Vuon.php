<?php
class Vuon {
    public $age = 50;
    public $height = 160;
    public $weight = 50;

    public function dna(){
        echo __METHOD__;
    }

}

class ConNguoi {
    public $age;
    public $height;
    public $hand;

    public function eat(){
        echo __METHOD__;
    }
}

$nhung = new ConNguoi();
echo $nhung->age;
echo $nhung->height;

