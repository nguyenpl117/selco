<?php

use App\Http\Controllers\BlogController;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Route;
use TailwindMerge\TailwindMerge;

function cnn(...$args)
{
    return TailwindMerge::instance()->merge(...$args);
}

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

page_title('Selco - Trang chủ');
LengthAwarePaginator::defaultView('paginate');


Route::prefix('')
    ->as('vi.')
    ->group(function () {
        require 'lang.php';
    });

Route::prefix('/en')
    ->as('en.')
    ->group(function () {
        require 'lang.php';
    });





//Route::get('/{slug}', [BlogController::class, 'slug']);
//
//Route::get('/{parent}/{slug}', function () {
//    // slug = 'gioi-thieu'
//    echo 'parent/slug';die;
//});