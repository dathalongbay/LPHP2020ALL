<?php

class InputText {

    public $type;

    public $name;

    public $value;

    public $placeholder;

    public $style;

    // khai báo phương thức khởi tạo của class
    // phương thức khởi tạo khác với phương thức thông thường
    // phương thức thông thường thì chủ động gọi nó mới chạy
    // phương thức khởi tạo được tự động chạy ngay khi chúng ta
    // khởi tạo đối tượng bằng từ khóa new
    // chú ý có 2 shift trừ liên tiếp
    public function __construct($type_param, $name_param, $value_param, $placeholder_param, $style_param)
    {
        echo '<br> kiểm chứng về tự động chạy';
        $this->type = $type_param;
        $this->name = $name_param;
        $this->value = $value_param;
        $this->placeholder = $placeholder_param;
        $this->style = $style_param;
    }


    public function ouputHTML() {
        $html = "<input type='' name='' value='' placeholder='' style='' />";

        return $html;
    }

}

$input1 = new InputText('text', 'abc', '', 'Nhập demo input', '');

// in ra cấu trúc của 1 object
echo "<pre>";
print_r($input1);
echo "</pre>";

// gọi đến method outputHtml();