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
    public function checkImageValid($source) {
        $checkImage = getimagesize($source);
        if ($checkImage !== false) {
            return true;
        }

        return false;
    }


    /**
     * phương thức kiểm tra xem đây hình ảnh này đã tồn tại
     * trong thư mục upload hay chưa
     * trả về true nếu đúng
     * trả về false nếu sai
     */
    public function checkImageExist($target_file) {
        if (file_exists($target_file)) {
            return true;
        }

        return false;
    }

    /**
     * phương thức kiểm tra xem đuôi hình ảnh có hợp lệ
     * không phải là gif, jpg, png
     * trả về true nếu đúng
     * trả về false nếu sai
     */
    public function checkImageExtension($target_file) {
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {


            return false;
        }


        return true;
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
        $uploadTest = move_uploaded_file($source, $target);
        if ($uploadTest == true) {
            return true;
        }

        return false;
    }

}

$target_dir = 'upload/';
$targetFile = $target_dir . basename($_FILES["book_image"]["name"]);
$source = $_FILES["book_image"]["tmp_name"];

$f = new FileUpload();
$f->checkImageValid($source);
$f->checkImageExist($targetFile);
$f->checkImageExtension($targetFile);
$f->upload($source, $targetFile);