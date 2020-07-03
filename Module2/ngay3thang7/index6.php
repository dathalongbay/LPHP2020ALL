<?php

class HinhChuNhat {

    public $chieudai;


    public $chieurong;

    // yêu cầu gán giá trị cho các thuộc tính trong constructor khởi tạo
    public function __construct($chieudai_param, $chieurong_param)
    {
        $this->chieudai = $chieudai_param;
        $this->chieurong = $chieurong_param;
    }

    // tạo hàm hủy cho class này
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo '<br>Hàm hủy được chạy';
    }


    public function tinhDienTich() {

        $dientich = $this->chieudai*$this->chieurong;

        return $dientich;
    }


    public function tinhChuVi() {

        $chuvi = ($this->chieudai+$this->chieurong)*2;
        return $chuvi;

    }

}

// khởi tạo đối tượng và in ra
// dien tích và chu vi của 1 hcn có
// chieu dai là 15 và chieu rong là 5

$hcn1 = new HinhChuNhat(15,5);

echo "<pre>";
print_r($hcn1);
echo "</pre>";

echo "<br> S là : ".$hcn1->tinhDienTich();
echo "<br> P là : ".$hcn1->tinhChuVi();

// hủy object bằng unset

// TH2 : destruct tự động chạy khi ta chủ động huy object từ class đó
unset($hcn1);

echo '<br> DEMO ABC';


echo '<br> -- END SCRIPT PHP --';
// sau khi tính chu vi xong thì ko làm gì cả
// php script nó sẽ dừng ở đây => destruct sẽ tự động chạy
