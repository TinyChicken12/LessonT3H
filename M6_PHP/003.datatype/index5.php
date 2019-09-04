<?php
class Student {
    public $name;
    public $age;
    public $location;
    public  function setInfo($name, $age, $location) {
        $this->name = $name;
        $this->$age = $age;
        $this->location = $location;
    }
}
$an = new Student();
var_dump($an);