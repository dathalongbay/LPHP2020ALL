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
        Hàm trong php giống hàm trong JS
        khai báo từ function
    </pre>

    <?php
    function tinhChuViHinhChuNhat($a = 5, $b = 2) {
        $chuvi = ($a+$b)*2;
        return $chuvi;
    }

    // gọi hàm
    $e = 15;
    $f = 4;
    $ketqua = tinhChuViHinhChuNhat($e, $f);
    echo 'chu vi : ' . $ketqua;

    ?>

</body>
</html>