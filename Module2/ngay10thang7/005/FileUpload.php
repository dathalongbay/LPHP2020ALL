<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/13/2020
 * Time: 6:25 PM
 */

// dựa vào đoạn code upload hình ảnh sau
// https://prnt.sc/tgupph
// hãy xây dựng 1 class upload hình ảnh
// https://www.w3schools.com/php/php_file_upload.asp
class FileUpload {


    /**
     * phương thức kiểm tra xem đây có phải là 1 hình ảnh hay không
     * trả về true nếu đúng
     * trả về false nếu sai
     */
    public function checkImageValid() {

    }


    /**
     * phương thức kiểm tra xem đây hình ảnh này đã tồn tại
     * trong thư mục upload hay chưa
     * trả về true nếu đúng
     * trả về false nếu sai
     */
    public function checkImageExist() {

    }

    /**
     * phương thức kiểm tra xem đuôi hình ảnh có hợp lệ
     * không phải là gif, jpg, png
     * trả về true nếu đúng
     * trả về false nếu sai
     */
    public function checkImageExtension() {

    }


    /**
     * @param $source
     * @param $target
     * phương thức upload hình ảnh
     * có 2 tham số là nguồn hình ảnh và đích đến của hình ảnh
     * method này trả về true nếu upload thành công
     * và false nếu upload thất bại
     */
    public function upload($source,$target) {

    }

}