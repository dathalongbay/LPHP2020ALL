<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/27/2020
 * Time: 8:43 PM
 */


ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

// tên máy chủ CSDL hay IP của nó
// nếu gõ ip ở localhost có thể 127.0.0.1
$serverName = "localhost";
// username truy cập đến mysql
$userName = "root";
// password truy cập đến mysql
$password = "";
// tên cơ sở dữ liệu
$databaseName = "book111";

try {
    // tạo ra 1 kết nối đến CSDL
    $connection = mysqli_connect($serverName, $userName, $password, $databaseName);

    // kiểm tra kết nối đến CSDl có thành công không
    // khi viết thế này có thể hiểu là $connection chứa giá trị có thể là false hay null , hay 0 hoặc rỗng ''
    if (!$connection) {
        // không kết nối được đến CSDL
        throw new Exception("Không thể kết nối đến CSDL");
    }
} catch(Exception $e) {

    // in ra thông báo lỗi
    // chuyển hướng đến 404
    // gọi đến CSDL dự phòng
    // gửi mail cho quản trị viên
    echo "trang web đang bảo trì vui lòng quay lại sau !";

}
