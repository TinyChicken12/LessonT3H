<?php
echo print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form name="demo" action="" method="post">
    <p>
        Username: <input name="username" type="text">
    </p>
    <p>
        Password: <input name="password" type="password">
    </p>
    <p>
        <input type="submit" name="submit" value="Login">
    </p>

</form>
</body>
</html>