<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// trang chủ
Route::get('/', function () {
    return view('welcome');
});

// khai báo 1 router mới
Route::get('/intro', function(){
    return view('intro');
});

// khai báo thêm 1 router nữa
Route::get('/contact', function(){
    return view('contact');
});

// khai báo thêm 1 ví dụ khó hơn 1 chút
Route::get('/danh-muc/quan-ao-tre-em', function(){
    return view('danhmuc.quanaotreem');
});

// khai báo biến trên url
Route::get('/tin-tuc/{id}', function($id){
    echo "<br> biến id lấy được từ trên url " . $id;
    return view('tintuc');
});

// khai báo biến trên url
Route::get('/binh-luan/{id?}', function($id = 0){
    echo "<br> biến id lấy được từ trên url " . $id;
});

// nhiều biến trên url
Route::get('/posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    echo "<br> post id : " . $postId;
    echo "<br> comment id : " . $commentId;
});

// truyền biến xuống view
Route::get('/tin-tuc-trong-ngay/{id}', function($id){
    echo "<br> biến id lấy được từ trên url " . $id;

    // truyền mảng xuống view
    $data = [];
    $data['id_tin'] = $id;
    $data['message'] = "hà nội";
    $data['code'] = "php";

    return view('tintuctrongngay', $data);
});
