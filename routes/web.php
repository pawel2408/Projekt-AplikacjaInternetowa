<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    // return str('hello world');
    return view('home');
});
Route::get('/contact', function () {
    // return str('hello world');
    return view('kontakt');
});


Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/{post:slug?}', [PostController::class, 'show'])->name('show');

Route::post('/blog/{post:slug}/comments', [CommentController::class, 'store']);


// Route::get('categories/{category:slug}', function(Category $category) {
//     return view('blog-index', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all()
//     ]);
// });

// Route::get('post/{category:slug}', function(Category $category) {
//     return view('blog.post', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all()
//     ]);
// });

Route::get('authors/{author}', function(User $author) {
    return view('blog.blog-index', [
        'posts' => $author->posts
    ]);
});

/**
 * 
 * Autoryzacja
 * 
 */

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/', [SessionsController::class, 'destroy'])->middleware('auth');

/**
 * 
 * Admin
 *  
 */

//  Route::get('admin/blog/create', [PostController::class, 'create'])->middleware(('admin'));
//  Route::post('admin/blog', [PostController::class, 'store'])->middleware(('admin'));

 Route::get('/admin/index', [AdminController::class, 'index']);
 Route::get('/create', [PostController::class, 'create']);
 Route::post('/create', [PostController::class, 'store']);

 Route:: resource('blog', PostController::class)
    ->only(['index', 'show', 'create', 'store', 'edit', 'update']);