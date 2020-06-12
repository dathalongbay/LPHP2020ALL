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

    <?php
    // tạo ra 2 biến mặc định
    $thu_nhap = '';
    $so_nguoi_phu_thuoc = '';


    // mảng thuế thu nhập cá nhân
    $taxs = [
            ['title' => 'Đến 5 triệu VNĐ', 'tax' => 5, 'money' => 0],
            ['title' => 'Trên 5 triệu VNĐ đến 10 triệu VNĐ', 'tax' => 10, 'money' => 0],
            ['title' => 'Trên 10 triệu VNĐ đến 18 triệu VNĐ', 'tax' => 15, 'money' => 0],
            ['title' => 'Trên 18 triệu VNĐ đến 32 triệu VNĐ', 'tax' => 20, 'money' => 0],
            ['title' => 'Trên 32 triệu VNĐ đến 52 triệu VNĐ	', 'tax' => 25, 'money' => 0],
            ['title' => 'Trên 52 triệu VNĐ đến 80 triệu VNĐ	', 'tax' => 30, 'money' => 0],
            ['title' => 'Trên 80 triệu VNĐ', 'tax' => 35, 'money' => 0],

    ];


    // isset() kiểm tra xem có tồn tại hay không
    // !empty() kiểm tra xem có rỗng hay không
    // !empty() trả về true nêu không rỗng và trả về false nếu có rỗng
    if (isset($_POST) && !empty($_POST)) {
        $thu_nhap = isset($_POST['thu_nhap']) ? (int)$_POST['thu_nhap'] : 0;
        $so_nguoi_phu_thuoc = isset($_POST['so_nguoi_phu_thuoc']) ? (int)$_POST['so_nguoi_phu_thuoc'] : 0;


        $luong_gross = $thu_nhap;
    }



    ?>

    <div class="container">
        <div class="row">
            <h1>Công cụ tính lương Gross sang Net / Net sang Gross chuẩn 2020</h1>
            <form name="gross" action="" method="post">
                <div class="form-group">
                    <label for="thunhap">Thu nhập :</label>
                    <input type="text" name="thu_nhap" class="form-control" placeholder="Nhập thu nhập" id="thunhap" autocomplete="off" value="<?php echo $thu_nhap ?>">
                </div>
                <div class="form-group">
                    <label for="so_nguoi_phu_thuoc">Số người phụ thuộc :</label>
                    <input type="text" name="so_nguoi_phu_thuoc" class="form-control" placeholder="Số người phụ thuộc" id="so_nguoi_phu_thuoc" value="<?php echo $so_nguoi_phu_thuoc ?>">
                </div>

                <button type="submit" class="btn btn-primary">GROSS -> NET</button>
            </form>
        </div>
    </div>

    <div class="container" style="margin-top: 20px">
        <div class="row">
            <table class="table">
                			
                <thead>
                    <tr>
                        <th>Lương Gross</th>
                        <th>Bảo hiểm</th>
                        <th>Thuế TNCN</th>
                        <th>Lương Net</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo isset($luong_gross) ? number_format($luong_gross) . ' VND' : ''; ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <div class="container" style="margin-top: 20px">
    <div class="row">
        <h2>Diễn giải chi tiết</h2>
        <table class="table">

            <tbody>
                <tr>
                    <td>Lương GROSS</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Bảo hiểm xã hội (8%)</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Bảo hiểm y tế (1.5%)</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Bảo hiểm thất nghiệp (1%)</td>
                    <td></td>
                </tr>



                <tr>
                    <td>Thu nhập trước thuế	</td>
                    <td></td>
                </tr>


                <tr>
                    <td>Giảm trừ gia cảnh bản thân	</td>
                    <td></td>
                </tr>


                <tr>
                    <td>Giảm trừ gia cảnh người phụ thuộc</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Thu nhập chịu thuế	</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Thuế thu nhập cá nhân(*)</td>
                    <td></td>
                </tr>


                <tr>
                    <td>
                        Lương NET <br>
                        (Thu nhập trước thuế - Thuế thu nhập cá nhân)
                    </td>
                    <td></td>
                </tr>



            </tbody>
        </table>
    </div>
    </div>


    <div class="container" style="margin-top: 20px">
        <div class="row">
            <h2>(*) Chi tiết thuế thu nhập cá nhân (VNĐ)</h2>
            <table class="table">

                <thead>
                    <tr>
                        <th>Mức chịu thuế</th>
                        <th>Thuế suất</th>
                        <th>Tiền nộp</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($taxs as $taxItem) : ?>
                    <tr>
                        <td><?php echo $taxItem['title'] ?></td>
                        <td><?php echo $taxItem['tax'] ?>%</td>
                        <td><?php echo $taxItem['money'] ?></td>
                    </tr>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>



    <div class="container" style="margin-top: 20px">
        <div class="row">
            <h2>Người sử dụng lao động trả (VNĐ)</h2>
            <table class="table">

                <tbody>
                <tr>
                    <td>Lương GROSS</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Bảo hiểm xã hội (17%)	</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Bảo hiểm Tai nạn lao động - Bệnh nghề nghiệp (0.5%)	</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Bảo hiểm y tế (3%)	</td>
                    <td></td>
                </tr>



                <tr>
                    <td>Bảo hiểm thất nghiệp (1%)	</td>
                    <td></td>
                </tr>


                <tr>
                    <td>Tổng cộng</td>
                    <td></td>
                </tr>




                </tbody>
            </table>
        </div>
    </div>




</body>
</html>