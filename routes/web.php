<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;  

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Everything About Caca']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = Post::all();
    return view('posts', ['title' => count($user->posts) . ' Article By : ' . $user->name, 'posts' => $user->posts ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Category ' . count($category->posts) . ' Article In : ' . $category->name, 'posts' => $category->posts ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
