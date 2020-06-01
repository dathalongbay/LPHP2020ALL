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



    <h1>Khai báo mảng</h1>

    <?php
    // cách 2
    $traicay = ['cam', 'táo', 'xoài', 'ổi', 'nho'];

    // in ra cấu trúc của mảng
    echo '<br> cách 1 sử dụng var_dump ';
    var_dump($traicay);
    // cách 2 là sử dụng print_r
    echo '<pre>';
    print_r($traicay);
    echo '</pre>';


    ?>

</body>
</html>