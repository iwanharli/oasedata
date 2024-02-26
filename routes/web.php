<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StatsController;

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

// Route::get('/', 'HomeController@index');

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/news', [NewsController::class, 'index'])->name('news');
// Route untuk menampilkan berita berdasarkan slug
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Route::post('/news-player', 'ApiController@postNews');

Route::get('/statistic', [StatsController::class, 'index'])->name('statistic');
Route::get('/statistic/{slug}', [StatsController::class, 'show'])->name('statistic.show');


Route::get('/news-player', function () {
    return view('_news.music-player');
})->name('_news.music-player');;

Route::get('/404', function () {
    return view('_extra._404');
})->name('extra.404');;


Route::get('test', function () {
    echo "asu";
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
