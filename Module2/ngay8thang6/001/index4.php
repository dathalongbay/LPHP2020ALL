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
        Lặp 1 mảng đa chiều
    </pre>
    <?php
    $cities = [];

    $cities[] = [
            'ten' => 'ha noi',
            'danso' => 10000000,
            'GDP' => '1 tỷ USD',
            'quan_huyen' => [
                'hk' => ['name' => 'hoan kiem'] ,
                'da' => ['name' => 'dong anh'] ,
            ]
    ];

    $cities[] = [
        'ten' => 'ho chi minh',
        'danso' => 1000000,
        'GDP' => '5 tỷ USD',
        'quan_huyen' => [
            'td' => ['name' => 'thu duc'] ,
            'q1' => ['name' => 'quan 1'] ,
        ]
    ];

    $cities[] = [
        'ten' => 'da nang',
        'danso' => 20000000,
        'GDP' => '10 tỷ USD',
        'quan_huyen' => [
            'nhs' => ['name' => 'ngu hanh son'] ,
            'st' => ['name' => 'son tra'] ,
        ]
    ];
    // in ra cau truc cua mang
    echo '<pre>';
    print_r($cities);
    echo '</pre>';

    echo '<ul>';
    foreach($cities as $cityKey => $city) {

            echo '<li>';
            echo 'ten tp : ' . $city['ten'];
                echo '<ul>';
                foreach($city['quan_huyen'] as $districtKey => $district) {

                    echo '<li>';
                    echo 'ten quan : ' . $district['name'];
                    echo '</li>';
                }
                echo '</ul>';
            echo '</li>';

    }
    echo '</ul>';

    ?>




</body>
</html>