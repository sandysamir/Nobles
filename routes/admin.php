<?php

use Illuminate\Support\Facades\Route;

Route::view('/login', 'admindashboard.login')->name('adminlogin');
Route::post('/login', 'AdminController@login')->name('store');
Route::view('/register', 'admindashboard.register')->name('adminregister');
Route::post('/register', 'AdminController@register')->name('admin.registeration');
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/addbook', 'BookController@addbook')->name('addbook');
    Route::post('/savebook', 'BookController@savebook')->name('savebook');
    Route::get('/allbooks', 'BookController@allbooks')->name('allbooks');
    Route::any('/deletebook', 'BookController@deletebook')->name('deletebook');
    Route::get('/editbook/{book_id}', 'BookController@editbook')->name('editbook');
    Route::post('/updatebook/{book_id}', 'BookController@updatebook')->name('updatebook');
    Route::any('/pdf', 'BookController@pdf')->name('pdf');
    Route::post('/logout','AdminController@logout');
});
//////////////////////////////////////////////login admin////////////////

