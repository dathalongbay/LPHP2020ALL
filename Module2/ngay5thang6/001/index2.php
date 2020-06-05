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

$cities[1] = ['ten' => 'hà nội', 'danso' => 10000000, 'gdp' => 200000000];
$cities[2] = ['ten' => 'hồ chí minh', 'danso' => 18000000, 'gdp' => 400000000];
$cities[3] = ['ten' => 'đà nẵng', 'danso' => 2000000, 'gdp' => 10000000];

$cities[1]['quanhuyen'] = ['hoàn kiếm', 'tây hồ', 'hoàng mai'];
$cities[2]['quanhuyen'] = ['quận 1', 'quận thủ đức', 'quận 12'];
$cities[3]['quanhuyen'] = ['quận ngũ hành sơn', 'quận sơn trà'];

//

echo '<pre>';
print_r($cities);
echo '</pre>';
// truy cập vào các phần tử của mảng đa chiều

?>



<div>
    Thông tin hà nội :
    <br> Tên :
    <?php echo $cities[1]['ten']; ?>
    <br> Dân số :
    <?php echo $cities[1]['danso']; ?>
    <br> GDP :
    <?php echo $cities[1]['gdp']; ?>

</div>

</body>
</html>