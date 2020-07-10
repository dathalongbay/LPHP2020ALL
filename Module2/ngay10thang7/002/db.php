<?php
// interface là giao diện
// chú ý trong interface chỉ khai báo tên của các method
// mà các class implements nó sẽ phải thực thi
interface Authen {

    public function login();

    public function register();

}

interface Crud {

    public function create();

    public function delete();

    public function update();

    public function read();

}


// class thực thi 2 interface
class Book implements Authen,Crud {

    public function login() {
        echo '<br>' . __METHOD__;
    }

    public function register() {
        echo '<br>' . __METHOD__;
    }

    public function create() {
        echo '<br>' . __METHOD__;
    }

    public function delete() {
        echo '<br>' . __METHOD__;
    }

    public function update() {
        echo '<br>' . __METHOD__;
    }

    public function read() {
        echo '<br>' . __METHOD__;
    }

}

$book = new Book();
$book->read();