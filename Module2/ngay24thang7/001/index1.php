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
    <h1>Phạm vi của biến</h1>

    <pre>
        chia làm 2 loại :
        - biến cục bộ có 2 loại nhỏ
        + loại biến cục bộ 1 là các tham số được khai báo khi tạm hàm function
        + loại biến cục bộ 2 là các biến được khai báo bên trong function
        biến cục bộ nó chỉ hoạt động trong hàm và chết khi hàm kết thúc chỗ đóng }
        - biến toàn cục được khai báo bên ngoài hàm hoặc class
        và nó sẽ chỉ kết thúc khi mà script php kết thúc
        chú ý không thể in ra biến toàn cục bên trong function
    </pre>

<?php

function tinhChuViHCN($a, $b) {
    /**
     * $a, $b là 2 tham số được truyền vào trong hàm
     * và tham số $a và $b chỉ có tác dụng trong hàm
     * và là biến cục bộ
     */


    // biến $p được khai báo bên trong function
    // chỉ có ảnh hưởng trong hàm tinhChuViHCN
    // $p là biến cục bộ
    $p = ($a + $b)*2;

    return $p;
} // hàm kết thúc

/**
 * $c và $d $e được khai báo bên ngoài hàm nên nó là biến toàn cục
 * biến toàn cục sẽ có tác dụng cho đến khi script php kết thúc
 */
$c = 5;
$d = 4;
$e = tinhChuViHCN($c, $d);
echo "<br> chu vi : " . $e;


include_once "index2.php";
?>

</body>
</html>