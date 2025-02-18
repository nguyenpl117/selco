<?php

use App\Http\Controllers\BlogController;
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

function page_title($title)
{
    view()->share('page_title', $title);
}
page_title('Selco - Trang chủ');
Route::get('/', function () {
    view()->share('fixedMenu', true);
    return view('home');
})->name('home');

Route::get('/lien-he', function () {
    page_title('Liên hệ');
    return view('lien-he');
});

Route::get('/gioi-thieu', function () {
    page_title('Giới thiệu');
    return view('gioi-thieu');
});

Route::get('/lich-su', function () {
    page_title('Lịch sử');
    return view('lich-su');
});

Route::get('/co-cau', function () {
    page_title('Cơ cấu tổ chức');
    return view('co-cau');
});

Route::get('/thanh-tich', function () {
    page_title('Thành tích đạt được');
    return view('thanh-tich');
});

Route::get('/tin-tuc', function () {
    page_title('Tin tức');
    return view('tin-tuc.list');
});
Route::get('/tin-tuc-chi-tiet', function () {
    page_title('Tin tức chi tiết');
    return view('tin-tuc.detail');
});

Route::get('/du-an', function () {
    page_title('Dự án');
    return view('du-an.list');
});
Route::get('/du-an-chi-tiet', function () {
    page_title('Dự án chi tiết');
    return view('du-an.detail');
});

Route::get('/quan-he-co-dong', function () {
    page_title('Quan hệ cổ đông');
    return view('docs.list');
});
Route::get('/quan-he-co-dong-chi-tiet', function () {
    page_title('Quan hệ cổ đông chi tiết');
    return view('docs.detail');
});
Route::get('/tin-tuyen-dung', function () {
    page_title('Tin tuyển dụng');
    return view('tuyen-dung.list');
});
Route::get('/tin-tuyen-dung-chi-tiet', function () {
    page_title('Tin tuyển dụng chi tiết');
    return view('tuyen-dung.detail');
});




//Route::get('/{slug}', [BlogController::class, 'slug']);
//
//Route::get('/{parent}/{slug}', function () {
//    // slug = 'gioi-thieu'
//    echo 'parent/slug';die;
//});