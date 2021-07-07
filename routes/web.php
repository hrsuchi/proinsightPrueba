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
    return view('auth/login');
});

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index']);

//
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){
    Route::any('/a', function (){
        return view('a', ["page" => "a"]);
    });
    Route::get('/{page}',  function($page){
        return view('admin_index', ["page" => "admin_".$page]);
    });
});