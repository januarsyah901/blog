<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

# route blog
Route::get('/post', function () {
    return view('post',[
        'title' => 'Blog',
        'author' => 'Januarsyah',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'Januarsyah',
        'street' => 'Jl. Raya Cikarang - Cibarusah',
        'city' => 'Bekasi, Jawa Barat',
        'email' => 'hallobandung@gmail.com',
        'phone' => '081234567890'
    ]);
});
