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
// biến trong php bắt đầu $ theo sau là tên biến
// chú ý tên biến viết liên và không dấu và không nên chứa ký tự đặc biệt nhứ  @ , !
$a = 5;
$b = 2;
// trong php dùng dấu . để nối chuôi
echo "<br> Tổng " . ($a + $b);
echo "<br> Hiệu " . ($a - $b);
echo "<br> Tích " . ($a * $b);
echo "<br> Thương  " . ($a / $b);
echo "<br> Phép chia lấy dư " . ($a % $b);

?>

</body>
</html>