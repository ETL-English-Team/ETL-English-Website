<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{ngay}',["as"=>"hello", function($ngay){
    echo "Hôm nay là ngày: ".$ngay;
}])->where(['ngay'=>'[0-9]+']);

Route::get('xinchao', ["as"=>"xinchao",function(){
    return 'Xin chào các bạn';
}]);

Route::get('hi',function(){
    return redirect()->route('xinchao');
});

Route::group(["prefix"=>"MyUser"],function(){
    Route::get("User1",function(){
        echo "User 1";
    });
    Route::get("User2",function(){
        echo "User 2";
    });
});

Route::get('home',function(){
    return view('home');
});

Route::get('level-list',function(){
    return view('level-list');
});

Route::get('vocabulary',function(){
    return view('vocabulary');
});

Route::get('test',function(){
    return view('test');
});