<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // sql injection
    $id = 2;
    $id = "2 OR 1=1; DELETE * FROM customer";
    $sql = "SELECT * FROM customer WHERE $id";
    // xem thêm tại link https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
    ?>

</body>
</html>