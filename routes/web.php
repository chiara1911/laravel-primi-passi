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
    $data = [
        'text1' => 'hello',
        'text2'=> 'world!',
    ];
    return view('home', $data);
});

Route::get('/about', function () {

    $name = 'Minnie';
    $surname = 'Mouse';

    return view('pages.about', compact('name','surname'));

}) -> name('about');
