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


//Route::get('hello', function() {
    //return '<html><body><h1>Hello</h1><p>This is sample page.
    //</p></body></html>';
//});
use App\Http\Middleware\HelloMiddleware;

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
//--------データーの挿入---------//
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
//--------データーの更新---------//
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
//-------データーの削除----------//
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

Route::get('person', 'PersonController@index');

//実習用
Route::get('jissyu2', 'JissyuController@index');
//jissyu3_1
Route::get('jissyu3', 'jissyu3_1Controller@index');
Route::post('jissyu3', 'jissyu3_1Controller@index');
//jissyu3_2
Route::get('jissyu4', 'jissyu3_2Controller@index');
Route::post('jissyu4', 'jissyu3_2Controller@index');
//jissyu3_3
Route::get('jissyu5', 'jissyu3_3Controller@index');
