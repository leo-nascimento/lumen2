<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use function foo\func;

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
Route::get('/', 'WebsiteController@index')->name('site');
Route::get('/project/{type}', 'WebsiteController@showProjects')->name('project');


Route::prefix('admin/')->group(function(){
    Route::resource('posts', 'Admin\PostController', ['except' => ['destroy']]);
    Route::get('/posts/{post}/delete', 'Admin\PostController@destroy')->name('posts.destroy');
    Route::resource('projects', 'Admin\ProjectController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

