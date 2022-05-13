<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/form',function(){
    return view('form');
});

Route::post('/create','FormController@store');

Route::get('/ajax_upload', 'AjaxUploadController@index');

Route::post('/ajax_upload', 'AjaxUploadController@action');

Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');

