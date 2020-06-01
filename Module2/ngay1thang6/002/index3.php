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



    <h1>Truy cập vào các phần tử của mảng thông qua chỉ số</h1>

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

    echo '<br>' . $traicay[0];
    echo '<br>' . $traicay[1];
    echo '<br>' . $traicay[2];
    echo '<br>' . $traicay[3];
    echo '<br>' . $traicay[4];

    // thay đổi giá trị thông qua chỉ số
    $traicay[1] = 'kiwi';
    echo '<pre>';
    print_r($traicay);
    echo '</pre>';

    // hủy 1 chỉ số trong mảng
    unset($traicay[3]);

    echo '<pre>';
    print_r($traicay);
    echo '</pre>';
    ?>

</body>
</html>