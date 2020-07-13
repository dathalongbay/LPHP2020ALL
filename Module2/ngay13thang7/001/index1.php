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
        Có 2 kiểu thời gian trong PHP
        1 - Kiểu 1 dành cho người đọc
        ví dụ 12-12-2005 , 09/10/1995
        2 - Kiểu thứ 2 timestamp
        là số giây tính 1-1-1970
        và đây là kiểu dùng để tính toán
        ví dụ : 12334556677777

        định dạng
        Y năm
        m tháng
        d ngày
        H giờ
        i phút
        s giây

        <?php
        // xuất ra thơi gian hiên tại theo timestamp
        echo "<br>" . time();
        // xuất ra thời gian hiện tại theo người đọc
        echo "<br>" . date("Y-m-d H:i:s");
        ?>

    </pre>

</body>
</html>