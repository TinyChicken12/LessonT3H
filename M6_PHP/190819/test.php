<?php
$list = [1, 3, 5, 7, 3, 4, 2, 9, 10];
$total = 0;
foreach ($list as $val) {
    if ($val < 4)
        continue;
    $total += $val;
    echo $total;
}
?>