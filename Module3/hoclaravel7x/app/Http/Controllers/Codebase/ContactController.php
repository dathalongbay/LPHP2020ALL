<?php

namespace App\Http\Controllers\Codebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index() {
        echo __METHOD__;
    }

    public function index2($categoryId, $postId) {

        echo "<br>";
        echo __METHOD__;

        echo "<br> categoryId : " . $categoryId;
        echo "<br> postId : " . $postId;

    }


    public function index3($categoryId = 0, $postId = 0) {

        echo "<br>";
        echo __METHOD__;

        echo "<br> categoryId : " . $categoryId;
        echo "<br> postId : " . $postId;

    }

}
