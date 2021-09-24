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

use App\Http\Controllers\HelloController;
use App\Http\Controllers\RestappController;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/msg/{msg?}', function($msg = 'no message.'){

    $html = <<<EOF
    <h1>{$msg}</h1>
    EOF;

    return $html;
});

//RestFull
Route::resource('rest','RestappController');

//board
Route::get('board','BoardController@index');

Route::get('board/add','BoardController@add');
Route::post('board/add','BoardController@create');

//person
Route::get('person','PersonController@index');
Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');

Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');
Route::get('person/edit','PersonController@edit');
Route::post('person/edit','PersonController@update');
Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');

Route::get('hello','HelloController@index')->middleware('auth');
Route::post('hello','HelloController@post');

//auth
Route::get('hello/auth','HelloController@getAuth');
Route::post('hello/auth','HelloController@postAuth');

//CRUD
Route::get('hello/show','HelloController@show');
Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@create');
Route::get('hello/edit','HelloController@edit');
Route::post('hello/edit','HelloController@update');
Route::get('hello/del','HelloController@delete');
Route::post('hello/del','HelloController@remove');

//session
Route::get('hello/session','HelloController@ses_get');
Route::post('hello/session','HelloController@ses_put');

Route::get('hello/other','HelloController@other');

Route::get('hello/view/{id?}','HelloController@view');
Route::get('hello/query','HelloController@query');

Route::get('hello/blade','HelloController@blade');
Route::post('hello/blade','HelloController@bladePost');

Route::get('hello/foreach','HelloController@forEach');
Route::get('hello/for','HelloController@For');
Route::get('hello/while','HelloController@While');

Route::get('hello/rest','HelloController@rest');


Route::get('single','SingleActionController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
