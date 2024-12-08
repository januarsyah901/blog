<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


// 'Controller'
class Posts
{
    public static function all()
    {
        return [
        [
            'id' => '1',
            'post_title' => 'Kamu siapa ini dimana siapa namanya',
            'slug' => 'kamu-siapa-ini-dimana-siapa-namanya',
            'img' => 'b4',
            'category' => 'Web Programming',
            'published_at' => '5 March 2020',
            'author' => 'Januarsyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12'
        ],
        [
            'id' => '2',
            'post_title' => 'Kamu siapa ini dimana siapa namanya',
            'slug' => 'kamu-siapa-ini-dimana-siapa-namanya',
            'img' => 'b5',
            'category' => 'Web Programming',
            'published_at' => '5 March 2020',
            'author' => 'Januarsyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12'
        ],
        [
            'id' => '3',
            'post_title' => 'Kamu siapa ini dimana siapa namanya',
            'slug' => 'kamu-siapa-ini-dimana-siapa-namanya',
            'img' => 'b6',
            'category' => 'Web Programming',
            'published_at' => '5 March 2020',
            'author' => 'Januarsyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12'
        ],
        [
            'id' => '4',
            'post_title' => 'Kamu siapa ini dimana siapa namanya',
            'slug' => 'kamu-siapa-ini-dimana-siapa-namanya',
            'img' => 'b7',
            'category' => 'Web Programming',
            'published_at' => '5 March 2020',
            'author' => 'Januarsyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. lorem12'
        ],
    ];
    }
}
# route home
Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

# route blog
Route::get('/posts', function () {
    return view('posts',[
        'title' => 'Blog', 'posts' => Posts::all()
    ]);
});

# route single post
Route::get('/posts/{slug}', function ($slug) {
    $post = Arr::first(Posts::all(), function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post',[
        'title' => 'Single Post',
        'post' => $post
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


