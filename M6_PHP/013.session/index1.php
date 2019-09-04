
<?php //Bắt buộc phải khởi tạo session trước khi sử dụng
    session_start();  //Cú pháp khởi tạo session
    ?>

<?php
    $_SESSION["name"] = "Nguyen Hong Phat";
    $_SESSION["age"] = 18;
    $_SESSION["married"] = 0;

    echo "<pre>";
    print_r($_SESSION);  // Kết quả in ra là session này gồm 1 mảng mà key là giá trị được truyền từ câu trên
    echo "</pre>";
?>