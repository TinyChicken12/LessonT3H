<?php
class Student {
    public $name;
    public $age;
    public $point;

    public function __construct($name_para, $age_para, $point_para)
    {
        echo __METHOD__;
        $this->name = $name_para;
        $this->age = $age_para;
        $this->point = $point_para;
    }

    public function printInfo(){
        echo __METHOD__;
        echo "<br>" . $this->name;
        echo "<br>" . $this->age;
        echo "<br>" . $this->point;
    }

    public function pointAverCal(){
        $total = 0;
        foreach ($this->point as $value){
            $total += $value;
        }
        return $total / count($this->point);
    }
}

$phat = new Student("Phat", 18, 8);
echo "<pre>";
print_r($phat);
echo "</pre>";
echo "<hr>";
$phat->printInfo();
echo "<hr>";
$phat->point = array(
  "toan"=> 8,
    "ly"=>7,
    "hoa"=>9
);
echo $phat->pointAverCal();
