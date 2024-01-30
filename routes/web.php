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

Route::get('/', 'IndexController')->name('index');

Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
    Route::get('/', 'IndexController')->name('category.index');
    Route::get('/create', 'CreateController')->name('category.create');
    Route::post('/', 'StoreController')->name('category.store');
    Route::get('/{category}/show', 'ShowController')->name('category.show');
    Route::get('{category}/edit', 'EditController')->name('category.edit');
    Route::patch('/{category}', 'UpdateController')->name('category.update');
    Route::delete('/{category}', 'DeleteController')->name('category.delete');
});

Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/create', 'CreateController')->name('post.create');
    Route::post('/', 'StoreController')->name('post.store');
    Route::get('/{post}/show', 'ShowController')->name('post.show');
    Route::get('{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/{post}', 'UpdateController')->name('post.update');
    Route::delete('/{post}', 'DeleteController')->name('post.delete');
});
