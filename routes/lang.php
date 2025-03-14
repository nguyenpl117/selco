<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    view()->share('fixedMenu', true);
    $news = serverAPI()->listNews(4);
    $projects = serverAPI()->listProjects(4);
//    $docs = serverAPI()->listStakeHolders(4);
    $partners = serverAPI()->listPartners(4);
    $listOperations = serverAPI()->listOperations();
    $homePage = serverAPI()->home();
    return view('home', compact('news', 'projects', 'partners', 'listOperations', 'homePage'));
})->name('home');

Route::get('/lien-he', function () {
    page_title('Liên hệ');
    $contact = serverAPI()->contacts();

    return view('lien-he', compact('contact'));
})->name('contact');
Route::post('/lien-he', function () {
    request()->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required'
    ]);
    serverAPI()->postContact(request()->all());
    return back();
});

Route::get('/gioi-thieu', function () {
    page_title('Giới thiệu');
    $introduces = serverAPI()->introduces();

    return view('gioi-thieu', compact('introduces'));
})->name('about_us');

Route::get('/lich-su', function () {
    page_title('Lịch sử');
    $introduces = serverAPI()->introduces();
    return view('lich-su', compact('introduces'));
})->name('history');

Route::get('/co-cau', function () {
    page_title('Cơ cấu tổ chức');
    $introduces = serverAPI()->introduces();
    return view('co-cau', compact('introduces'));
})->name('organizational');

Route::get('/thanh-tich', function () {
    page_title('Thành tích đạt được');
    $introduces = serverAPI()->introduces();
    return view('thanh-tich', compact('introduces'));
})->name('achievements');

Route::get('/tin-tuc', function () {
    page_title('Tin tức');
    $posts = serverAPI()->listNews();
    return view('tin-tuc.list', compact('posts'));
})->name('news');

Route::get('/tin-tuc/{slug}-{id}', function ($slug, $id) {
    page_title('Tin tức chi tiết');
    $posts = serverAPI()->listNews();
    $post = serverAPI()->detailNew($id);

    return view('tin-tuc.detail', compact('posts', 'post'));
})->where([
    'slug' => '[a-z0-9-]+',
    'id' => '\d+'
])
    ->name('news.show');

Route::get('/du-an', function () {
    page_title('Dự án');
    $posts = serverAPI()->listProjects();
    return view('du-an.list', compact('posts'));
})->name('projects');
Route::get('/du-an/{slug}-{id}', function ($slug, $id) {
    page_title('Dự án chi tiết');
    $posts = serverAPI()->listProjects(7);
    $posts = $posts->filter(function ($item) use($id) {
        return $item->id != $id;
    });
    $posts = $posts->splice(0, 6);
    $post = serverAPI()->detailProject($id);

    if (count($post->images) < 2) {
        return view('du-an.detail2', compact('posts', 'post'));
    }

    return view('du-an.detail', compact('posts', 'post'));
})
    ->where([
        'slug' => '[a-z0-9-]+',
        'id' => '\d+'
    ])
    ->name('du-an');

Route::get('/quan-he-co-dong', function () {
    page_title('Quan hệ cổ đông');
    $posts = serverAPI()->listStakeHolders();
    return view('docs.list', compact('posts'));
})->name('docs');

Route::get('/quan-he-co-dong/{slug}-{id}', function ($slug, $id) {
    page_title('Quan hệ cổ đông chi tiết');
    $posts = serverAPI()->listStakeHolders();
    $post = serverAPI()->detailStakeHolder($id);
    return view('docs.detail', compact('posts', 'post'));
})->where([
    'slug' => '[a-z0-9-]+',
    'id' => '\d+'
])
    ->name('docs.show');

Route::get('/quan-he-co-dong/{slug}', function ($slug) {
    page_title('Quan hệ cổ đông');
    $posts = serverAPI()->listStakeHolders($slug);
    return view('docs.list', compact('posts'));
})->where([
    'slug' => '[a-z0-9-]+',
])->name('docs.cat');



Route::get('/tin-tuyen-dung', function () {
    page_title('Tin tuyển dụng');
    $posts = serverAPI()->listRecruitments();

    return view('tuyen-dung.list', compact('posts'));
})->name('recruitments');

Route::get('/tin-tuyen-dung/{slug}-{id}', function ($slug, $id) {
    page_title('Tin tuyển dụng chi tiết');
    $posts = serverAPI()->listRecruitments();
    $post = serverAPI()->detailRecruitment($id);

    return view('tuyen-dung.detail', compact('posts', 'post'));
})->where([
    'slug' => '[a-z0-9-]+',
    'id' => '\d+'
])
    ->name('recruitments.show');


// linh vuc hoat dong
Route::get('/{slug}-op{id}', function ($slug, $id) {
    $post = serverAPI()->detailOperation($id);
    $posts = serverAPI()->listOperations();
    $posts = $posts->filter(function ($item) use ($post) {
        return $post->id != $item->id;
    });
    page_title($post->title);
    return view('linh-vuc.bien-ap', compact('post', 'posts'));
})
    ->where([
        'slug' => '[a-z0-9-]+',
        'id' => '\d+'
    ])
    ->name('operations');

//Route::get('/xay-lap-dien', function () {
//    page_title('Xây lắp điện');
//    return view('linh-vuc.bien-ap');
//});
//Route::get('/nang-luong', function () {
//    page_title('Năng lượng');
//    return view('linh-vuc.bien-ap');
//});
//Route::get('/san-xuat-cong-nghiep', function () {
//    page_title('Sản xuất công nghiệp');
//    return view('linh-vuc.bien-ap');
//});
//Route::get('/bat-dong-san', function () {
//    page_title('Bất động sản');
//    return view('linh-vuc.bien-ap');
//});
//
//Route::get('/thi-cong-tram-bien-ap', function () {
//    page_title('Thi công trạm biến áp');
//    return view('linh-vuc.bien-ap');
//});
//Route::get('/lap-dung-cot', function () {
//    page_title('Lắp dựng cột');
//    return view('linh-vuc.bien-ap');
//});
//Route::get('/cang-day-dan', function () {
//    page_title('Căng dây dẫn');
//    return view('linh-vuc.bien-ap');
//});
//Route::get('/keo-day', function () {
//    page_title('kéo dây');
//    return view('linh-vuc.bien-ap');
//});
//Route::get('/kinh-doanh', function () {
//    page_title('Kinh doanh Vật tư thiết bị ngành điện');
//    return view('linh-vuc.bien-ap');
//});