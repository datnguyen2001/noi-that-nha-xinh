<?php

use App\Http\Controllers\web\BoSuuTapController;
use App\Http\Controllers\web\DuAnController;
use App\Http\Controllers\web\NoiThatTanCoDienController;
use App\Http\Controllers\web\NoiThatGoOcChoController;
use App\Http\Controllers\web\PhongThoController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Web\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/camera-video' , [HomeController::class, 'cameraVideo'])->name('cameraVideo');
Route::get('/lien-he' , [HomeController::class, 'contact'])->name('lien-he');
Route::get('/video' , [HomeController::class, 'introduction'])->name('introduction');
Route::get('/hot-sale' , [HomeController::class, 'hotSale'])->name('hot-sale');

Route::group(['prefix' => 'noi-that-go-oc-cho', 'as' => 'noi-that-go-oc-cho.'], function () {
    Route::get('/', [NoiThatGoOcChoController::class, 'index'])->name('home');
    Route::get('/san-pham', [NoiThatGoOcChoController::class, 'sanPham'])->name('san-pham');

    Route::group(['prefix' => 'phong-khach', 'as' => 'phong-khach.'], function () {
        Route::get('/', [NoiThatGoOcChoController::class, 'phongKhach'])->name('index');
        Route::get('/sofa', [NoiThatGoOcChoController::class, 'sofa'])->name('sofa');
        Route::get('/ban-tra', [NoiThatGoOcChoController::class, 'banTra'])->name('ban-tra');
        Route::get('/ke-tivi', [NoiThatGoOcChoController::class, 'keTivi'])->name('ke-tivi');
        Route::get('/ke-trang-tri', [NoiThatGoOcChoController::class, 'keTrangTri'])->name('ke-trang-tri');
    });

    Route::group(['prefix' => 'phong-bep', 'as' => 'phong-bep.'], function () {
        Route::get('/', [NoiThatGoOcChoController::class, 'phongBep'])->name('index');
        Route::get('/ban-ghe-an', [NoiThatGoOcChoController::class, 'banGheAn'])->name('ban-ghe-an');
        Route::get('/tu-bep', [NoiThatGoOcChoController::class, 'tuBep'])->name('tu-bep');
        Route::get('/quay-bar', [NoiThatGoOcChoController::class, 'quayBar'])->name('quay-bar');
        Route::get('/tu-ruou', [NoiThatGoOcChoController::class, 'tuRuou'])->name('tu-ruou');
    });

    Route::group(['prefix' => 'phong-ngu', 'as' => 'phong-ngu.'], function () {
        Route::get('/', [NoiThatGoOcChoController::class, 'phongNgu'])->name('index');
        Route::get('/giuong-ngu', [NoiThatGoOcChoController::class, 'giuongNgu'])->name('giuong-ngu');
        Route::get('/ban-trang-diem', [NoiThatGoOcChoController::class, 'banTrangDiem'])->name('ban-trang-diem');
        Route::get('/tu-quan-ao', [NoiThatGoOcChoController::class, 'tuQuanAo'])->name('tu-quan-ao');
    });
});

Route::group(['prefix' => 'noi-that-tan-co-dien', 'as' => 'noi-that-tan-co-dien.'], function () {
    Route::get('/', [NoiThatTanCoDienController::class, 'index'])->name('home');

    Route::group(['prefix' => 'phong-khach', 'as' => 'phong-khach.'], function () {
        Route::get('/', [NoiThatTanCoDienController::class, 'phongKhach'])->name('index');
        Route::get('/sofa', [NoiThatTanCoDienController::class, 'sofa'])->name('sofa');
        Route::get('/ban-tra', [NoiThatTanCoDienController::class, 'banTra'])->name('ban-tra');
        Route::get('/ke-tivi', [NoiThatTanCoDienController::class, 'keTivi'])->name('ke-tivi');
    });

    Route::group(['prefix' => 'phong-bep', 'as' => 'phong-bep.'], function () {
        Route::get('/', [NoiThatTanCoDienController::class, 'phongBep'])->name('index');
        Route::get('/ban-ghe-an', [NoiThatTanCoDienController::class, 'banGheAn'])->name('ban-ghe-an');
        Route::get('/tu-bep', [NoiThatTanCoDienController::class, 'tuBep'])->name('tu-bep');
        Route::get('/quay-bar', [NoiThatTanCoDienController::class, 'quayBar'])->name('quay-bar');
        Route::get('/tu-ruou', [NoiThatTanCoDienController::class, 'tuRuou'])->name('tu-ruou');
    });

    Route::group(['prefix' => 'phong-ngu', 'as' => 'phong-ngu.'], function () {
        Route::get('/', [NoiThatTanCoDienController::class, 'phongNgu'])->name('index');
        Route::get('/giuong-ngu', [NoiThatTanCoDienController::class, 'giuongNgu'])->name('giuong-ngu');
        Route::get('/ban-trang-diem', [NoiThatTanCoDienController::class, 'banTrangDienm'])->name('ban-trang-diem');
        Route::get('/tu-quan-ao', [NoiThatTanCoDienController::class, 'tuQuanAo'])->name('tu-quan-ao');
    });

    Route::get('/tu-van' , [NoiThatTanCoDienController::class, 'tuVan'])->name('tu-van');
});

Route::group(['prefix' => 'phong-tho', 'as' => 'phong-tho.'], function () {
    Route::get('/ban-tho', [PhongThoController::class, 'banTho'])->name('ban-tho');
    Route::get('/don-tho', [PhongThoController::class, 'donTho'])->name('don-tho');
    Route::get('/vach-tho', [PhongThoController::class, 'vachTho'])->name('vach-tho');
});

Route::group(['prefix' => 'du-an', 'as' => 'du-an.'], function () {
    Route::get('/', [DuAnController::class, 'duAn'])->name('index');
    Route::get('/{slug}', [DuAnController::class, 'details'])->name('details');

    Route::get('/du-an-thiet-ke-go-oc-cho', [DuAnController::class, 'duAnThietKe'])->name('du-an-thiet-ke');
    Route::get('/du-an-thi-cong-go-oc-cho', [DuAnController::class, 'duAnThiCong'])->name('du-an-thi-cong');
});

Route::group(['prefix' => 'bo-suu-tap', 'as' => 'bo-suu-tap.'], function () {
    Route::get('/', [BoSuuTapController::class, 'boSuuTap'])->name('index');
    Route::get('/phong-bep', [BoSuuTapController::class, 'phongBep'])->name('phong-bep');
    Route::get('/phong-khach', [BoSuuTapController::class, 'phongKhach'])->name('phong-khach');
    Route::get('/phong-ngu', [BoSuuTapController::class, 'phongNgu'])->name('phong-ngu');
});

Route::get('/tin-tuc' , [HomeController::class, 'tinTuc'])->name('tin-tuc');
Route::get('/gioi-thieu', [HomeController::class, 'gioiThieu'])->name('gioi-thieu');
Route::get('/phong-cach-noi-that-go-oc-cho', [HomeController::class, 'phongCachNoiThat'])->name('phong-cach-noi-that');
Route::get('/product-details', [HomeController::class, 'productDetails'])->name('product-details');
Route::get('/khuyen-mai-details', [HomeController::class, 'khuyenMaiDetails'])->name('khuyen-mai-details');
Route::middleware('auth')->group(function () {

});
