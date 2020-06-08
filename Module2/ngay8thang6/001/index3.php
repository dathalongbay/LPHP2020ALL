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
        Lặp 1 mảng bằng vòng lặp foreach
    </pre>
    <?php
    $cities = ['ha noi', 'ho chi minh', 'da nang', 'can tho'];

    // in ra cau truc cua mang
    echo '<pre>';
    print_r($cities);
    echo '</pre>';

    // cách in ra value dua vao key
    echo '<br>' . $cities[0];
    echo '<br>' . $cities[1];
    echo '<br>' . $cities[2];
    echo '<br>' . $cities[4];

    // cach lap mang vong lap forach
    foreach($cities as $key => $value) {
        echo '<br> key là ' . $key .  ' value la ' . $value;
    }

    foreach($cities as $keyCity => $city) {
        echo '<br> key là ' . $keyCity .  ' value la ' . $city;
    }
    ?>




</body>
</html>