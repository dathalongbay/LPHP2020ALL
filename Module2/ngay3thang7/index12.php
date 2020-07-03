<?php

class Dienthoai {

    protected $sodienthoai = '00000';

    public function ngheDien() {
        echo "<br>" . __METHOD__;
    }

    protected function goiDien() {
        echo "<br>" . __METHOD__;
    }

}

// khi class con extends class cha
// thì class con có thể sử dụng được tất cả các thuộc tính
// và phương thức của class cha
class Dienthoaithongminh extends Dienthoai {


    public $ip_internet = '127.0.0.1';

    public function choiGame(){
        echo '<br>' . __METHOD__;
    }

    public function guiEmail() {
        echo '<br>' . __METHOD__;
    }

    public function goiDienThoai(){
        // có thể truy cập đến phương thức protected từ bên trong
        // class con đang kế thừa từ class cha
        $this->goiDien();
    }

    public function getSoDienthoai() {
        // có thể truy cập đến thuộc tính protected từ bên trong
        // class con đang kế thừa từ class cha
        return $this->sodienthoai;
    }
}

// truy cập vào protected bên ngoài bằng class con đã kế thừa
$sony = new Dienthoaithongminh();
//echo '<br> SDT : ' . $sony->sodienthoai;
echo '<br> : ' . $sony->goiDienThoai();
echo '<br> : ' . $sony->getSoDienthoai();

/**
 * public truy cập được mọi nơi
 * 1 - bên trong class
 * 2 - bên ngoài class
 * 3 - từ bên trong class kế thừa
 * private chỉ có thể truy cập bên trong class đó
 * protected có thể truy cập được bên trong class
 * và có thể truy cập được từ bên trong class kế thừa từ class cha
 */

