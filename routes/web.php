<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Peter Shaan', 'title' => 'About']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all() ]);
});

Route::get('/posts/{slug}', function($slug) {
    $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Kontak']);
});
