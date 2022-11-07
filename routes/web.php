<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;

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
    return view('Layout.app');
});

Route::controller(AuthController::class)->group(function(){
    
    Route::get('/loginForm','getLogin')->name('login');
    
    Route::post('/login','Login')->name('doLogin');
    
    Route::any('/logout', 'logout')->name('logout');

});

Route::group(['middlware' => 'auth'],function(){

    Route::get('/home',function(){
        return view('Pages.Home');
    });

    Route::controller(PostController::class)->prefix('post')->group(function(){
        
        Route::get('/','getPosts');

        Route::get('/{id}','getPost');

        Route::get('/add','getPostForm');

        Route::post('/add-post','store')->name('save-post');

    });



});
