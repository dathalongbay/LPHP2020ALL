<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/13/2020
 * Time: 8:55 PM
 */

include_once dirname(__FILE__) . '/mvc/product.php';
include_once dirname(__FILE__) . '/mvc2/product.php';

$book1 = new MVC\Product();
$book2 = new MVC2\Product();

echo "<pre>";
print_r($book1);
echo "</pre>";

echo "<pre>";
print_r($book2);
echo "</pre>";