<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/13/2020
 * Time: 8:36 PM
 */

echo "<br>" . __FILE__;
echo "<br>  : " . dirname(__FILE__);


// muốn sử dụng class , function , var trong 1 file khác
// thì bắt buộc phải nạp file đó vào
include_once dirname(__FILE__) . '/' . 'models/product.php';
include_once dirname(__FILE__) . '/' . 'models/customer.php';

$book1 = new Product();

echo "<pre>";
print_r($book1);
echo "</pre>";

$john = new Customer();

echo "<pre>";
print_r($john);
echo "</pre>";

