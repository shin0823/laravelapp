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

Route::get('hello', 'HelloController@index')->middleware('auth');
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

//-----------ORM(Person)----------
Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

Route::resource('rest', 'RestappController');

Route::get('hello/rest', 'HelloController@rest');

Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');

Route::get('hello', 'HelloController@index')
    ->middleware('auth');

    Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');

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
<<<<<<< HEAD
//Chapter3_2
Route::get('Chapter3_2', 'Chapter3_2Controller@index');
//Ohara
Route::get('Ohara','OharaController@index');
//jissyu
Route::get('jissyu6', 'Jissyu4_1Controlle@index');
Route::post('jissyu6', 'Jissyu4_1Controlle@post');
//jissyu5_1
Route::get('jissyu7', 'Jissyu5_1Controlle@index');
Route::get('jissyu7', 'Jissyu5_1Controlle@show');
//jissyu6_1
Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');
//jissyu6_3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> origin/text
