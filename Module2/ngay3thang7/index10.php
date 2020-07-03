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
}

