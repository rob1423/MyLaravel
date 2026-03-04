<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;

Route::post('/upload-file', function (Request $request) {

    $path = $request->file('file')->store('uploads');

    return redirect('/upload')->with('success', 'File uploaded successfully!');

});

Route::get('/posts', function () {

    $posts = Post::all();

    return $posts;

});

Route::get('/upload', function () {
    return view('upload');
});