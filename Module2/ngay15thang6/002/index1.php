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
        Làm việc với JSON trong PHP
    </pre>

    <?php
    // chuyển 1 mảng thành 1 chuỗi json
    $cities = ['ha noi', 'ho chi minh', 'da nang'];

    // chuyển nó thành json
    $cities_json = json_encode($cities);

    echo "<pre>";
    print_r($cities_json);
    echo "</pre>";

    // chuyển 1 chuoi json thành định dang ban đầu
    $arr1 = json_decode($cities_json);

    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
    ?>
</body>
</html>