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
        Kiểu mảng số 2 là mảng kết hợp
        - Mảng chỉ số có key là chỉ số nguyên
        - Mảng kết hợp có ít nhất 1 key là chuỗi

    </pre>

<?php

    $cities = [
        'hn' => 'Hà nội',
        'hcm' => 'Hồ chí minh',
        'dn' => 'Đà nẵng',
        'hp' => 'Hải phòng',
    ];

    echo '<pre>';
    print_r($cities);
    echo '</pre>';

    // truy cập vào các phần tử
echo '<br>' . $cities['hn'];
echo '<br>' . $cities['hcm'];
echo '<br>' . $cities['dn'];
echo '<br>' . $cities['hp'];

// thay đổi
$cities['hn'] = 'Hà nội 1';
echo '<pre>';
print_r($cities);
echo '</pre>';


// hủy 1 phần tử
unset($cities['hcm']);

echo '<pre>';
print_r($cities);
echo '</pre>';
?>

</body>
</html>