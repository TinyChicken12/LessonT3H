<?php
class Student {
    public $name = "Hoang";
    public $age;

    protected $point = 9;
    private $status = "single";

    public function thi() {
        echo "Hoc sinh di thi";
    }

    public function getStatus()
    {
        return $this->status;
    }

}

class ChildStudent extends Student {
    public function getPoint(){
        return $this->point;  //Có thể truy cập thuộc tính protected từ lớp con kế thừa
    }

}

$an = new Student();
echo $an->name;
echo "<br>";
$an->thi();
/*echo $an->point;
echo $an->status;*/
$binh = new ChildStudent();
echo "<br>";
echo $binh->getPoint();

echo "<br>";

//chỉ có thể truy cập private qua phương thức public getStatus trong class đó
echo $an->getStatus();
//Không thể truy cập thuộc tính private từ lớp con vì prive chỉ có 1 mức truy cập là chính class đó
//echo $binh->status;
