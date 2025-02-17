<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

function page_title($title)
{
    view()->share('page_title', $title);
}
page_title('Selco - Trang chủ');
Route::get('/', function () {
    view()->share('fixedMenu', true);
    return view('home');
})->name('home');

Route::get('/tin-tuc', function () {
    page_title('Tin tức');
    return view('tin-tuc');
});
Route::get('/tin-tuc-chi-tiet', function () {
    page_title('Tin tức chi tiết');
    return view('tin-tuc-chi-tiet');
});

//Route::get('/{slug}', [BlogController::class, 'slug']);
//
//Route::get('/{parent}/{slug}', function () {
//    // slug = 'gioi-thieu'
//    echo 'parent/slug';die;
//});