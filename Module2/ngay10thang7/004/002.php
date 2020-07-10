<?php


class Phone {

    public $so_dien_thoai;

    public function goiDien() {
        echo '<br>' . __METHOD__;
    }

    public function ngheDien() {
        echo '<br>' . __METHOD__;
    }
}


trait Computer {

    public $ip_address;

    public function office() {
        echo '<br>' . __METHOD__;
    }

    public function sendEmail() {
        echo '<br>' . __METHOD__;
    }

    public function receiveEmail() {
        echo '<br>' . __METHOD__;
    }
}

trait Mp3 {

    public function playMusic() {
        echo '<br>' . __METHOD__;
    }
}

trait Radio {

    public function listenRadio() {
        echo '<br>' . __METHOD__;
    }
}


class SmartPhone extends Phone {

    // mặc định class SmartPhone có thể dùng tất cả các
    // thuộc tính và phương thức ở mức truy cập là public và protected ở class
    // cha


    // muốn sử dụng tất cả các phương thức và thuộc tính
    // của các trait cho phép đa kế thừa
    // thì sử dụng từ khóa use để nạp các trait vào trong class con
    use Computer,Mp3,Radio;
}

$samsung = new SmartPhone();
// computer
$samsung->office();
// radio
$samsung->listenRadio();
// trait mp3
$samsung->playMusic();