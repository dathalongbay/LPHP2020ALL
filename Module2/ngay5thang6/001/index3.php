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

    <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // tạo ra 1 mảng lỗi
    $errors = [];

    // câu lệnh điều kiện trong php tương tự câu lệnh điều trong js
    // isset() trong PHP để kiểm tra xem 1 biến hay 1 phần tử trong mảng có tồn
    // tại hay không
    // nếu tồn tại isset() trả về true
    // nếu không tồn tại thì trả về false
    // && toán từ AND thỏa mãn 2 điều kiện
    if (isset($_POST['cannang']) && $_POST['chieucao']) {
        $cannang = $_POST['cannang'];
        $chieucao = $_POST['chieucao'];
        if ($cannang > 0 && $chieucao > 0) {
            $bmi = $cannang/($chieucao*$chieucao);
        } else {
            $errors[] = 'Chiều cao hay cân nặng không hợp lệ';
        }
    }

    if (isset($bmi)) {
        echo "<div style=\"color:red\">Chỉ số BMI là : $bmi</div>";
    }

    ?>

    <pre>
        Làm bài toán tính chỉ số BMI
        bằng PHP
        Sử dụng kiến thức phương thức POST
        giải bài này
        $_POST này lấy dữ liệu gửi đi từ form
        có method="post"
        khi 1 form có action="" thì nó sẽ gửi dữ liệu đến chính file đó
    </pre>

    <div>
        <form name="bmi" action="" method="post">
            <p>
                <label>Nhập chiều cao ( mét )</label>
                <input name="chieucao" value="" type="text">
            </p>
            <p>
                <label>Nhập cân năng ( kilogam )</label>
                <input type="text" name="cannang" value="">
            </p>
            <p>
                <input type="submit" name="submit" value="Tính BMI">
            </p>
        </form>
    </div>

</body>
</html>