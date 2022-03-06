<?php

use Illuminate\Support\Facades\Route;
//use app\http\controllers;
// prefix() routes group
// namespace folder
Route::get('/', 'App\http\controllers\pagesController@home')->name('welcome');
// routes fro about
Route::prefix('students')->group(function(){
    Route::get('fswd',function(){
        return "Full Stack Web Development";
    });
    Route::get('cdmm',function(){
        return "Digital Media MArketing";
    });
});
Route::get('/about',function(){
    return view('about');
})->name('about');
Route::get('/contact',function(){
    return view('contact');
})->name('contact');
