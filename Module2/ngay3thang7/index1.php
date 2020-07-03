<?php

// tạo ra 1 lớp class
class TheA {

    // khai báo thuộc tính
    // thuộc tính trong class chi ra đặc điểm tính chất của class đó
    public $href;

    public $title;

    public $target;

    public $text;


    // khai báo phương thức chỉ ra hành động cụ thể của class
    // phương thức method giống như hàm function nhưng nằm trong class
    public function outputHTML($href_param, $title_param, $target_param, $text_param){

        // gán giá trị của các tham số cho các thuộc tính bên trong class
        // khi muốn truy cập đến thuộc tính hay phương thức bên trong class
        // thì ta sử dụng từ khóa $this
        $this->href = $href_param;
        $this->title = $title_param;
        $this->target = $target_param;
        $this->text = $text_param;

        // in ra thẻ a bằng việc truy cập vào giá trị của các thuộc tính
        $html = "<a href='$this->href' title='$this->title' target='$this->target'>$this->text</a>";


        // trả về giá trị $html
        return $html;
    }

}


// khởi tạo đối tượng từ thẻ a này
$tiki = new TheA();
// gọi đến phương thức bên trong TheA
$tikiLink = $tiki->outputHTML('https://tiki.vn/', 'tiki', '_blank', 'Trang mua sắm tiki');
echo $tikiLink;

// khởi tạo đối tượng thứ 2
$tuoitre = new TheA();
$tuoitreLink = $tuoitre->outputHTML('https://tuoitre.vn/', 'tuổi trẻ', '_parent', 'Báo tuổi trẻ');
echo $tuoitreLink;