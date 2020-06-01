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

    <pre>
        Mảng trong PHP
        - kiểu số nguyên , số thực , chuỗi , boolean , null thì chỉ chứa được
        1 giá trị duy nhất
        - nếu muốn chứa nhiều giá trị thì sẽ phải dùng mảng
        Trong PHP thì 3 kiểu mảng
        Kiểu 1 : mảng chỉ số là mảng có key là chỉ số

        trong mảng có khái niệm là key ( chỉ số ) và value là giá trị
    </pre>

    <h1>Khai báo mảng</h1>

    <?php
    // cách 1
    $traicay = array('cam', 'táo', 'xoài', 'ổi', 'nho');

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