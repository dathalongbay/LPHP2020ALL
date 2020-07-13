<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/13/2020
 * Time: 8:03 PM
 */

// tham khảo list time zone
// https://www.php.net/manual/en/timezones.php
// https://www.php.net/manual/en/timezones.asia.php
date_default_timezone_set("Asia/Ho_Chi_Minh");

// xuất ra thơi gian hiên tại theo timestamp
echo "<br>" . time();
// xuất ra thời gian hiện tại theo người đọc
echo "<br>" . date("Y-m-d H:i:s");
?>

