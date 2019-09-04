<?php
function tinhLuong($ngayCong, $luongThang)
{
    if ($ngayCong > 0) {
        $luongThang = ($luongThang / 24) * $ngayCong;
        return $luongThang;
    }
}

echo tinhLuong(12, 10);