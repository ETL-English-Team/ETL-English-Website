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
    return view('user.home');
});

Route::get('level-list',function(){
    return view('user.level-list');
});

Route::get('vocabulary',function(){
    return view('user.vocabulary');
});

Route::get('test',function(){
    return view('user.test');
});

Route::get('first-examination', function(){
    return view('user.first-examination');
});

Route::get('second-examination', function(){
    return view('user.second-examination');
});

Route::get('magic-sound-box', function(){
    return view('user.magic-sound-box');
});

Route::get('profile', function(){
    return view('user.profile');
});


//Admin
Route::group(['prefix'=>'admin'],function(){
    Route::get('home', function(){
        return view('admin.home');
    });

    Route::get('topic-list', function(){
        return view('admin.topic-list');
    });

    Route::get('import-topic-by-excel-file', function(){
        return view('admin.import-topic-by-excel-file');
    });

    Route::get('import-vocabulary-by-excel-file', function(){
        return view('admin.import-vocabulary-by-excel-file');
    });

    Route::get('insert-topic', function(){
        return view('admin.insert-topic');
    });

    Route::get('insert-vocabulary', function(){
        return view('admin.insert-vocabulary');
    });
});