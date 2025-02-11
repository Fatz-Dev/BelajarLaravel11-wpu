<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Pages']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About Pages']);
});




Route::get('/posts', function () {


    $posts = Post::latest();
    return view('posts', ['title' => 'blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString()]);

    // if (request('search')) {
    //     $posts->where('title', 'like', '%' . request('search') . '%');
    // }

    // $posts = Post::with(['author', 'category'])->latest()->get();

});


Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Postt', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $author->posts->load(['author', 'category']);
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name , 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load(['author', 'category']);
    return view('posts', ['title' => count($category->posts) . ' Articles in :  ' . $category->name , 'posts' => $category->posts]);
});


Route::get('/artikel', function () {
    return view('artikel', ['title' => 'Article Pages']);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Kontak Pages']);
});
