<?php
session_start();
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

        <?php
        if (isset($_SESSION['errors']) && ($_SESSION['errors'])) {
            // implode chuyển 1 mảng thành 1 chuỗi
            $msg = implode(',', $_SESSION['errors']);
            echo "<p style='color:red'>$msg</p>";

            // hủy 1 session cụ thể
            unset($_SESSION['errors']);
        }
        ?>
        <form name="loginFrom" action="action.php" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>

            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
</div>

</body>
</html>