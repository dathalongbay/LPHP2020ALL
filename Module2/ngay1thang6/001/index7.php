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
    Các kiểu dữ liệu trong php
    1 - số
    2 - chuỗi
</pre>

<?php
// kiểu số nguyên
$a = 5;
echo '<br>' . $a;

// kiểu chuỗi
$b = 'hà nội';
echo '<br>' . $b;

// kiểu thập phân
$c = 3.1;
echo '<br>' . $c;

// kiểu boolean
$d = true;
$e = false;
echo '<br>';
// var_dump() in ra giá trị của biến và kiểu dữ liệu tương ứng
var_dump($d);
echo '<br>';
var_dump($e);

// kiểu null
$f = null;
echo '<br>';
var_dump($f);

// kiểu mảng trong php
$g = [2,4,6,8,10];
echo '<br>';
var_dump($g);

// kiểu đối tượng trong php
class Student {

    public $hoten = 'nguyen van a';

    public $tuoi = 21;

}

$student1 = new Student();

echo '<br>';
var_dump($student1);

?>

</body>
</html>