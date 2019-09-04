<?php
$mark = 8;
if ($mark < 5):
    echo "diem duoi trung binh";
elseif ($mark < 8):
    echo "diem trung binh";
elseif ($mark < 8.5):
    echo "diem kha";
else :
    echo "diem gioi";
endif;