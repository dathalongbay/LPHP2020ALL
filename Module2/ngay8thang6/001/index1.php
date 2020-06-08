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
        Vòng lặp for
    </pre>

    <?php
    // cách 1 in chuỗi bằng echo
    // cách 2 gán 1 chuỗi
    // cách 3 lồng mã php với mã html
    ?>

    <h1>
        Cách 2 gán vào  biến
    </h1>

    <?php
    // nháy đơn bên ngoài '' của php in ra chuỗi
    // nháy kép bên trong là html
    $select = '<select name="ngay">';
    for ($i = 1;$i <=31; $i++) {
        $select = $select . '<option value="'.$i.'">Ngày '.$i.'</option>';
    }
    $select = $select . '</select>';

    echo $select;

    ?>

    <br>
    in ra 1 thẻ select năm từ 1900 -> 2020
    <?php
    ?>

</body>
</html>