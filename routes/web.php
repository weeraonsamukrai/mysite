<?php

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
    $title = "MY HOME";
    $content = "WELCOME";
    return view('welcome')->with([
        'title'=> $title,
        'content'=> $content,
        ]);
})->name('HOME');

Route::get('/contact', function(){
    //return "ส่งเมลมาที่ khaiploy087q@hotmail.com";
    $title = "MY CONTACT";
    $content = "Khaiploy087q@hotmail.com";
    return view('contact')->with([
        'title'=> $title,
        'content'=> $content,
        ]);
})->name('CONTACT')->middleware('auth');

Route::get('/about', function(){
    //return "ขอบคุณค่ะ";
    $title = "MY ABOUT";
    $content = "My name is ploy.";
    return view('about')->with([
        'title'=> $title,
        'content'=> $content,
        ]);
})->name('ABOUT');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
