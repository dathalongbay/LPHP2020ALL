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

    <pre>Mảng đa chiều là mảng mà có mỗi phần tử bên trong lại là mảng con</pre>

<?php

$cities = [];

$cities[1] = ['ten' => 'hà nội', 'danso' => 10000000, 'gpd' => 200000000];
$cities[2] = ['ten' => 'hồ chí minh', 'danso' => 18000000, 'gpd' => 400000000];
$cities[3] = ['ten' => 'đà nẵng', 'danso' => 2000000, 'gpd' => 10000000];

echo '<pre>';
print_r($cities);
echo '</pre>';

?>


</body>
</html>