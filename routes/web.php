<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home') ;
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Nurhawana Nasution",
        "email" => "nurhawananasution14@gmail.com",
        "image" => "nnur.jpeg"
    ]);
});
Route::get('/blog', function () {
    return view('posts') ;
});