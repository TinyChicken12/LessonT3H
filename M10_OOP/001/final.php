<?php
class Student {
    public $name;
    public $age = 18;
    public $point = 9;

   /* function __construct($name_para, $age_para, $point_para)
    {
        $this->name = $name_para;
        $this->age = $age_para;
        $this->point = $point_para;
    }*/

    public function printInfo(){
        echo "<br>" . __METHOD__;
        echo "<br>" . $this->name = "Huy";
        echo "<br>" . $this->age = 18;
        echo "<br>" . $this->point = 7;
    }

    public function setInfo($name_para2, $age_para2, $point_para2){
        $this->name = $name_para2;
        $this->age = $age_para2;
        $this->point = $point_para2;
    }
}

/*$Phat = new Student();
$Phat->name = "Phat";

echo "<pre>";
echo print_r($Phat);
echo "</pre>";
echo "<hr>";
var_dump($Phat);
echo "<pre>";
print_r($Phat);
echo "</pre>";

$Phat->printInfo();*/

//Hàm khởi tạo __construct dk chạy ngay khi đối tượng được tạo
/*$tam = new Student("tam", 18, 8);
echo "<pre>";
print_r($tam);
echo "</pre>";*/

//Set gía trị qua hàm
$hieu = new Student();
$hieu->setInfo("Hieu", 18, 8);
echo "<pre>";
print_r($hieu);
echo "</pre>";
