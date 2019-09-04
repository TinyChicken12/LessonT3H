<?php
class Student{
    public $name = "An";
    public $age;
    protected $point;

    public function thi(){
        echo "e dang di thi";
    }

}

class Student2 {
    public static $name = "Hoang";
    public $age;

    public static function thi(){
        echo "e dang di thi p2";
    }

    public static function getName(){
        return self::$name;
}
}

$an = new Student();
echo $an->name;
echo "<br>";
echo $an->thi();
echo "<br>";


echo Student2::$name; //gọi đến dk property ngay cả khi chưa khởi tạo đối tượng
echo "<br>";
echo Student2::thi(); //gọi đến dk method ngay cả khi chưa khởi tạo đối tượng
echo "<br>";
echo Student2::getName();

