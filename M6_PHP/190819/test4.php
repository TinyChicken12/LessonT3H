<?php
function isLeapYear($year){
    if($year % 400 ==0 || ($year % 4 == 0 && $year %100 !=0)) {
        return true;
    }
    return false;
}

$year1 = 2019;
if(isLeapYear($year1)){
    echo $year1 . " la nam nhuan";
} else
    echo $year1 . " khong la nam nhuan";
?>