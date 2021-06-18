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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/fileup','UploadController@OnFileUp');

Route::get('/filedawonload/{folderPath}/{name}','DawonloadController@OnDawonload');

Route::get('/filelist','DawonloadController@OnSelectFile');

Route::get('/deletefile','DawonloadController@DeleteFile');
