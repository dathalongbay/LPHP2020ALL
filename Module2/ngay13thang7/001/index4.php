<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/13/2020
 * Time: 8:19 PM
 */

// cách chuyển thời gian timestamp thành kiểu datetime
// date(format, timestamp)
// nếu ko truyền tham số thứ 2 timestamp thì nó sẽ lấy
// timestamp hiện tại
echo "<br>" . date("H:i:s d-m-Y", 944046000);