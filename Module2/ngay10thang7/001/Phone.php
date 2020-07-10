<?php
// class trừu tượng
// là class chứa ít nhất 1 method abstract
// và class nào kế thừa từ class abstract bắt buộc phải
// viet code thực thi abstract method của class abstract cha
abstract class Phone {

    // phương thức trừu tượng không có nội dung
    abstract public function goiDienThoai();

}




class SmartPhone extends Phone {

    // thực thi nội dung phương thức abstract goiDienThoai
    public function goiDienThoai()
    {
        // TODO: Implement goiDienThoai() method.
        echo '<br>' . __METHOD__;
    }

}

$sony = new SmartPhone();
$sony->goiDienThoai();

/**
 * Fatal error: Class SmartPhone contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Phone::goiDienThoai) in C:\xampp\htdocs\128a\LPHP2020ALL\Module2\ngay10thang7\001\Phone.php on line 19
 */