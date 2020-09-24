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
    return view('home.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/admission', function () {
    return view('home.admission');
});

Route::get('/admissionlist', function () {
    return view('home.admission_list');
});

Route::get('/academics', function () {
    return view('home.academics');
});

Route::get('/academicslist', function () {
    return view('home.academics_list');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/news', function () {
    return view('home.news');
});

Route::get('/services', function () {
    return view('home.services');
});

Route::get('/commerce', function () {
    return view('academics.commerce');
});

Route::get('/criminology', function () {
    return view('academics.criminology');
});

Route::get('/education', function () {
    return view('academics.education');
});

Route::get('/gradeschool', function () {
    return view('academics.gradeschool');
});

Route::get('/it', function () {
    return view('academics.it');
});

Route::get('/juniorhigh', function () {
    return view('academics.juniorhigh');
});

Route::get('/seniorhigh', function () {
    return view('academics.seniorhigh');
});