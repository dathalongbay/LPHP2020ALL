<?php
session_start();
?>

<?php
if (!isset($_SESSION['login']) || ($_SESSION['login'] != 1)) {
    header('Location: login.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <h1>Đăng nhập thành công</h1>

        <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>

        <p>Chào <?php echo $_SESSION['login_email'] ?> bạn đã đăng nhập thành công</p>

        <a href="logout.php">Đăng xuất</a>
    </div>
</div>

</body>
</html>