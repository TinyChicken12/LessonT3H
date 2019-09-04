<?php
function giaiPtB1($num1, $num2) //Lúng túng và sai do đặt function bên trong hàm if và hơi loạn biến
{
    if($num1 == 0){
        if($num2 == 0){
            echo "pt co vo so nghiem";
        }
        else {
            echo "pt vo nghiem";
        }
    }
    else {
        $rs = -$num2/$num1;
        echo "pt co nghiem la: $rs";
    }
}

if(isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    giaiPtB1($num1, $num2);
}
?>