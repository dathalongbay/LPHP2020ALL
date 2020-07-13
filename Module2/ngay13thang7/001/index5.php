<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/13/2020
 * Time: 8:21 PM
 */

// chuyển ngược lại từ chuỗi date time thành timestamp
// dùng strtotime()
// chú ý strtotime() chỉ đúng với 1 số format
$t = strtotime("12:00:00 01-12-1999");

echo date("d-m-Y", $t);