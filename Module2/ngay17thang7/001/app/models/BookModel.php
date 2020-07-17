<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/17/2020
 * Time: 6:37 PM
 */
namespace App\Models;

// nạp namespace khác vào trong namespace hiện tại
use App\Helpers\Database;

class BookModel extends Database {


    public function getAll() {
        echo '<br>' . __METHOD__;
        return [];
    }

}