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
// khai báo chuỗi bằng nháy kép ""
    $hoten = "Lê minh quân";
    echo "<br>chào " . $hoten;

    // cách 2 là dùng nháy đơn
    $hoten2 = 'Lê thùy linh';
    echo '<br>chào ' . $hoten2;


    // cách 3 đặt biến trực tiếp trong nháy kép mà không phải nối chuỗi
$hoten3 = "Lê minh quân 1";

// khi đặt biến php trong nháy kép thì php hiểu đó là 1 biến
echo "<br> chào $hoten3";

$hoten4 = 'Lê thùy linh 1';
// php hiểu $hoten4 trong nháy đơn không phải là 1 biến mà là 1 chuỗi
echo '<br> chào $hoten4';



?>

</body>
</html>