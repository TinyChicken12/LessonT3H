<?php

function remainderDivision($a, $b){
    $t = $a / $b;
    return $t - intval($t);
}

function isLeapYear($year){

    if(remainderDivision($year, 400) == 0 ||
        (remainderDivision($year, 4) == 0 && remainderDivision($year, 100) != 0))
        return true;
    return false;
}
/*---------------------------------------------------*/

$year = 2016;
if(isLeapYear($year))
    echo $year . ' la nam nhuan.';
else
    echo $year. ' khong la nam nhuan.';

?>