<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::auth();

Route::get('/home', 'HomeController@index');


});

Route::get('admin', function () {
    return view('master.admin_template');
});

Route::get('test', 'TestController@index');


Route::get('/testmodel', function() {
$query = App\GCMUser::all();
return $query;
});

Route::resource('gcmuser', 'GCMUserController');


Route::get('/testmodel2', "GCMUserController@index");