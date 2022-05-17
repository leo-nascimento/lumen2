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
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/', 'WebsiteController@index')->name('site');
Route::get('/project/{type}', 'ProjectController@show')->name('project');
Route::post('/send-contact', 'WebsiteController@sendContact')->name('contact.send');
Route::post('/send-budget' , 'WebsiteController@storeBudget')->name('budget.store');
Route::post('/calculate-economy' , 'WebsiteController@calculateEconomy')->name('calculate-economy');

Route::prefix('posts/')->group(function(){
    Route::get('/', 'PostController@index')->name('post.index');
    Route::get('/show/{id}', 'PostController@show')->name('post.show');
});

Route::prefix('admin/')->group(function(){
    Route::resource('posts', 'Admin\PostController', ['except' => ['destroy']]);
    Route::get('/posts/{post}/delete', 'Admin\PostController@destroy')->name('posts.destroy');

    Route::resource('projects', 'Admin\ProjectController', ['except' => ['destroy']]);
    Route::get('/projects/{projectId}/delete', 'Admin\ProjectController@destroy')->name('projects.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

