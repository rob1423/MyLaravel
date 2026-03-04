<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/create-post', function () {

    Post::create([
        'title' => 'My First Post',
        'content' => 'This post was created using Laravel Eloquent ORM.'
    ]);

    return "Post created successfully";

});

Route::get('/posts', function () {

    $posts = Post::all();

    return $posts;

});