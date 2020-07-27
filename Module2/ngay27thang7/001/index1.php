<?php

$string = "Ha noi la thu do viet nam. Ha noi có khoang 8 triệu dân";
// i là không phân biệt hoa thường
// pattern bắt đầu / và kết thúc /
$pattern = "/ha noi/i";
$search = preg_match($pattern, $string);
var_dump($search);


// sử dụng preg_match_all
$search_all = preg_match_all($pattern,$string);
echo "<br>";
var_dump($search_all);

// sử dụng preg_replace
$replacement = "Thăng long";
$newString = preg_replace($pattern, $replacement, $string);
echo "<br>";
var_dump($newString);


