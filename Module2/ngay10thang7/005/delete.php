<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/29/2020
 * Time: 7:28 PM
 */
/**
 * Cách kết nối đến CSDL mysql theo hướng hàm
 * function
 */

// tên máy chủ CSDL hay IP của nó
// nếu gõ ip ở localhost có thể 127.0.0.1
$serverName = "localhost";
// username truy cập đến mysql
$userName = "root";
// password truy cập đến mysql
$password = "";
// tên cơ sở dữ liệu
$databaseName = "book";

// tạo ra 1 kết nối đến CSDL
$connection = new mysqli($serverName, $userName, $password, $databaseName);

// kiểm tra kết nối đến CSDl có thành công không
// khi viết thế này có thể hiểu là $connection chứa giá trị có thể là false hay null , hay 0 hoặc rỗng ''
if ($connection->connect_error) {
    // không kết nối được đến CSDL
    die("Không thể kết nối đến CSDL " . $connection->connect_error);
}

echo "<pre>";
print_r($_GET);
echo "</pre>";
// khi chạy xuống dưới thì có nghĩa là kết nối CSDL thành công
echo "<br> Kết nối thành công đến CSDL";


if (isset($_GET['id']) && ($_GET['id'] > 0) ) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM book WHERE id=$id";

    $ketquaSQL = mysqli_query($connection, $sql);

    if ($ketquaSQL) {

        echo "<br> xóa thành công";
        //header("Location: index.php");
        //exit;
    } else {
        echo "<br> Có lỗi xảy ra : " . mysqli_error($connection);
    }
}