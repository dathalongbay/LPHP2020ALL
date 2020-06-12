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
            <h1>Xác định yêu cầu bài toán</h1>

            <pre>
                Xây dựng 1 function
                function grossToNet() {
                    // Nội dung của function
                }
                => Suy nghĩ bài toàn theo hướng
                input -> output
                => Câu hỏi số 1 : hàm này cần các tham số gì ?
                Các tham số chính là các đầu vào input của bài toàn
                nếu bài toán có nhiều hơn 3 tham số đầu vào
                ta nên truyền tham số dưới dạng mảng

                nếu hàm có từ 3 tham số trở xuống có thể
                truyền theo dạng
                function grossToNet($input1, $input2, $input3) {
                    // Nội dung của function
                }


                => câu hỏi số 2 : hàm này trả về cái gì ?
                Kết quả cuối cùng là cái chúng ta cần trả về
                chính là lương net ?
                ngoài ra còn cần trả về các thông tin cụ thể
                như bảo hiểm xã hội , y tế ...

                Khi cần trả về nhiều kết quả cho bài toán
                ta nên return dưới dạng 1 mảng array trong php
                ví dụ
                return [
                    'net' => 1000000,
                    'bhxh' => 20000,
                    'bhyt' => 10000
                ];
            </pre>
        </div>

    </div>

</body>
</html>