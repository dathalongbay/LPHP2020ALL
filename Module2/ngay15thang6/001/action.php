<?php
session_start();
$errors = [];
echo "<pre>";
print_r($_POST);
echo "</pre>";

if ( isset($_POST['email']) && isset($_POST['password']) ) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'admin@gmail.com' && $password == '123') {
        // đăng nhập thành công
        $_SESSION['login'] = 1;
        $_SESSION['login_email'] = $email;

        // hủy 1 session cụ thể
        unset($_SESSION['errors']);

        // chuyển hướng trang tự động về index
        header('Location: index.php');
        exit;
    } else {
        $errors[] = 'Email hay mật khẩu không đúng';
    }
} else {
    $errors[] = 'Thông tin đăng nhập chưa hợp lệ';
}
$_SESSION['errors'] = $errors;
header('Location: login.php');
exit;
?>
