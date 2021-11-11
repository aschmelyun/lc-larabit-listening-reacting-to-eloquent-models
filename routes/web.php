<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/posts', PostController::class);

});

require __DIR__.'/auth.php';
