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
    if (isset($_POST['cannang']) && isset($_POST['chieucao'])) {
        $cannang = $_POST['cannang'];
        $chieucao = $_POST['chieucao'];
        if ($cannang > 0 && $chieucao > 0) {
            $bmi = $cannang/($chieucao*$chieucao);
        } else {
            $errors[] = 'Chiều cao không hợp lệ';
            $errors[] = 'Hay cân nặng không hợp lệ';
            $errors[] = 'Vui lòng kiểm tra lại';
        }
    }

    if (isset($bmi)) {
        echo "<div style=\"color:red\">Chỉ số BMI là : $bmi</div>";

        $phanloai = '';
        if ($bmi > 0 && $bmi < 18.5) {
            $phanloai = 'dưới chuẩn';
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $phanloai = 'bình thường';
        }elseif ($bmi >= 25 && $bmi <= 29.9) {
            $phanloai = 'thừa cần';
        }elseif ($bmi >= 30 && $bmi <= 34.9) {
            $phanloai = 'béo phì độ 1';
        }elseif ($bmi >= 35 && $bmi <= 39.9) {
            $phanloai = 'béo phì độ 2';
        } elseif ($bmi >= 40) {
            $phanloai = 'béo phì độ 3';
        } else {
            $phanloai = 'chỉ số bmi không hợp lê.';
        }
        echo "<div style=\"color:red\">Phân loại theo BMI : $phanloai</div>";
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


    <?php
    // in ra thông báo lỗi nếu có
    // count() trả về số phần tử của 1 mảng array trong php
    if (isset($errors) && count($errors) > 0) {
        // không thể in mảng bằng lệnh echo
        // chuyển 1 mảng thành 1 chuỗi bằng hàm implode()
        // implode('ký tự phân tách các phần tử của mảng', $mangPHP)
        echo "<pre>";
        print_r($errors);
        echo "</pre>";
        echo "<div style=\"color:orange\">Thông báo lỗi : " . implode(' <br> ', $errors) . "</div>";
    }
    ?>
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