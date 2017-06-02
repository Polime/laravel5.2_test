<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',['as' => 'profile' ,function () {   //对路由起名
    echo route('profile');    //输出当前路由地址
}]);

// Route::get('test', 'Admin\indexController@index');//使用indexController控制器中的index方法

// Route::get('/hd', function () {
//     echo "get";
// });

// Route::post('/hd', function () {
//     echo "post";
// });

// Route::put('/hd', function () {
//     echo "put";
// });
//
// Route::delete('/hd', function () {
//     echo "delete";
// });
//
// Route::pach('/hd', function () {
//     echo "pach";
// });

// Route::match(['get','post'],'/test', function () {
//     echo "match";
// });

// Route::any('foo', function () {
//     echo "foo";
// });

// Route::get('/{id}', function($id) {
//     return 'user'.$id;
// });

// Route::get('/post/{post}/commont/{commont}', function ($i,$j) {
//     return $i.'&'.$j;
// });

// Route::get('user/{id?}', function ($id=null) {    //?表示可选
//     return $id;
// })->where('id','[0-9]+');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
