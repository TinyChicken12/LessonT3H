<?php
include_once "app/controllers/backend/index.php";

use \App\Controllers\Backend\IndexController;  //Sử dụng use thì chỉ cần trỏ đến tên classname
$index1 = new IndexController();
$index1->getMethod();