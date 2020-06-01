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
        Hằng số trong PHP
        - Biến số trong PHP là 1 thứ để chứa giá trị và giá trị biến
        thì thay đổi trong quá trình chạy php
        - Hằng số là thứ để chứa giá trị nhưng giá trị của nó không
        thay đổi trong suốt quá trình chạy
        - Biến bắt đầu $
        - Hằng số thì không bắt đầu bằng $ nhưng nên viết hoa

         define(tên hằng số , giá trị);
    </pre>

    <?php
    define("HOTEN", "Nguyễn văn an");
    $tuoi = 15;

    echo '<br> Hằng số ' . HOTEN;
    echo '<br> Biến số ' . $tuoi;


    ?>

</body>
</html>