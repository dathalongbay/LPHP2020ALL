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
        $GLOBALS là super global ( siêu toàn cục ) được sử dụng để truy cập
        đến các biến toàn cục ở bất cứ đâu trong php script
    </pre>

    <?php

    /**
     * $c và $d $e được khai báo bên ngoài hàm nên nó là biến toàn cục
     * biến toàn cục sẽ có tác dụng cho đến khi script php kết thúc
     */
    $c = 5;
    $d = 4;
    $e = tinhChuViHCN($c, $d);

    function tinhChuViHCN($a, $b) {
        /**
         * $a, $b là 2 tham số được truyền vào trong hàm
         * và tham số $a và $b chỉ có tác dụng trong hàm
         * và là biến cục bộ
         */

        // thử truy cập 2 biến global
        echo "<br> in ra biến global trong hàm : " . $GLOBALS["c"];
        echo "<br> in ra biến global trong hàm : " . $GLOBALS["d"];


        // biến $p được khai báo bên trong function
        // chỉ có ảnh hưởng trong hàm tinhChuViHCN
        // $p là biến cục bộ
        $p = ($a + $b)*2;

        return $p;
    } // hàm kết thúc


    ?>

</body>
</html>