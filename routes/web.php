php<?php

use App\Http\Controllers\LoginController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('Home', [
        'title' => 'Home',
    ]);
});
Route::get('/', function () {
    return view('Home', [
        'title' => 'Home',
    ]);
});
Route::get('/about', function () {
    return view('About', [
        'title' => 'About',
        'name' => 'yuki',
        'Email' => 'yukiabqary@gmail.com',
        'image' => 'kyrie-irving-sadar-harus-kurangi-tekanan-pada-diri-sendiri.jpg',
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/posts/{$slug}', [PostController::class, 'show']);

