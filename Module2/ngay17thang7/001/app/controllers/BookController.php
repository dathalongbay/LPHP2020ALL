<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/17/2020
 * Time: 6:33 PM
 */
namespace App\Controller;

// nạp namespace
use App\Models\BookModel;

class BookController {

    public function index() {
        echo '<br>' . __METHOD__;

        // gọi method getAll() trong BookModel

        $bookModel1 = new BookModel();
        $bookModel1->getAll();
    }

}