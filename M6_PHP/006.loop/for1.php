<?php
//in ra so tu 1 den 20 va la so chan
for ($num = 1; $num <= 20; $num++) {
    if (($num % 2) == 0) {
        echo "$num <br>";
    }
}
echo "<br>";
//in ra so tu 1 den 20 ma la so le
for ($num = 1; $num <= 20; $num++) {
    if (($num % 2) != 0) {
        echo "$num <br>";
    }
}
echo "<br>";
for ($num = 20; $num >= 1; $num--) {
    if (($num % 2) == 0) {
        echo "$num <br>";
    }
}