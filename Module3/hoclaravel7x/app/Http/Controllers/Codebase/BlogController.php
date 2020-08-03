<?php

namespace App\Http\Controllers\Codebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index() {
        echo "<br>" . __METHOD__;

        return view("codebase.blog.index");
    }

    public function create() {
        echo "<br>" . __METHOD__;

        return view("codebase.blog.create");
    }

    public function edit($id) {
        echo "<br>" . __METHOD__;

        echo "<br> in biến id trong controller : " . $id;

        // truyền mảng $data cho view
        $data = [];
        $data['postId'] = $id;
        $data['msg'] = "success";

        return view("codebase.blog.edit", $data);
    }

    public function delete($id) {
        echo "<br>" . __METHOD__;

        echo "<br> in biến id trong controller : " . $id;

        // truyền mảng $data cho view
        $data = [];
        $data['postId'] = $id;
        $data['msg'] = "success";

        return view("codebase.blog.delete" , $data);
    }

}
