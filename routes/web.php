<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('blog');
// });

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/article/{slug}', [BlogController::class, 'article_blog'])->name('blog.content');
Route::get('/head/{slug}', [BlogController::class, 'head_blog'])->name('blog.headline');
Route::get('/category/{category}', [BlogController::class, 'list_category'])->name('blog.category');
Route::get('search', [BlogController::class, 'search'])->name('search');
Route::get('/about', [BlogController::class, 'about'])->name('about');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
Route::get('/media-siber', [BlogController::class, 'media_siber'])->name('mediasiber');
Route::get('/advertisement', [BlogController::class, 'advertisement'])->name('advertisement');
Route::get('/privacy', [BlogController::class, 'privacy'])->name('privacy');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
