<?php
$tuoi = 35;
if (($tuoi > 0) && ($tuoi < 18)){
    echo "tuoi chua truong thanh";
} elseif ($tuoi < 30){
    echo "tuoi thanh nien";
} elseif ($tuoi < 50){
    echo "tuoi trung nien";
} else {
    echo "tuoi gia";
}