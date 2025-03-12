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
    $posts = serverAPI()->listProjects();
    return view('du-an.list', compact('posts'));
});
Route::get('/du-an/{slug}-{id}', function ($slug, $id) {
    page_title('Dự án chi tiết');
//    /** @var \Illuminate\Support\Collection $posts */
//    $posts = require_once(base_path('routes/du-an.php'));
//    $posts = $posts->splice(0, 3);
//    $post = $posts[$slug];
    $posts = serverAPI()->listProjects();
    $post = serverAPI()->detailProduct($id);
    return view('du-an.detail', compact('posts', 'post'));
})
    ->where([
        'slug' => '[a-z0-9-]+',
        'id' => '\d+'
    ])
    ->name('du-an');

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


// linh vuc hoat dong
Route::get('/xay-lap-dien', function () {
    page_title('Xây lắp điện');
    return view('linh-vuc.bien-ap');
});
Route::get('/nang-luong', function () {
    page_title('Năng lượng');
    return view('linh-vuc.bien-ap');
});
Route::get('/san-xuat-cong-nghiep', function () {
    page_title('Sản xuất công nghiệp');
    return view('linh-vuc.bien-ap');
});
Route::get('/bat-dong-san', function () {
    page_title('Bất động sản');
    return view('linh-vuc.bien-ap');
});

Route::get('/thi-cong-tram-bien-ap', function () {
    page_title('Thi công trạm biến áp');
    return view('linh-vuc.bien-ap');
});
Route::get('/lap-dung-cot', function () {
    page_title('Lắp dựng cột');
    return view('linh-vuc.bien-ap');
});
Route::get('/cang-day-dan', function () {
    page_title('Căng dây dẫn');
    return view('linh-vuc.bien-ap');
});
Route::get('/keo-day', function () {
    page_title('kéo dây');
    return view('linh-vuc.bien-ap');
});
Route::get('/kinh-doanh', function () {
    page_title('Kinh doanh Vật tư thiết bị ngành điện');
    return view('linh-vuc.bien-ap');
});





//Route::get('/{slug}', [BlogController::class, 'slug']);
//
//Route::get('/{parent}/{slug}', function () {
//    // slug = 'gioi-thieu'
//    echo 'parent/slug';die;
//});