<?php

/*
 * Nạp các file php cần thiết cho quá trình chạy
 */
define("SITE_URL", dirname(__FILE__));

echo '<br> SITE_URL : ' . SITE_URL;
include_once SITE_URL."/app/controllers/BookController.php";

/**
 * Chú ý file index.php
 * không nằm trong namespace nào cả
 * nên bản chất là nó nằm trong global namespace
 * nên khi mà gọi đến 1 namespace khác mà đang ở trong
 * global namespace thì ta thêm dấu \ trước tên của namespace đó
 */
$controller1 = new \App\Controller\BookController();
$controller1->index();



