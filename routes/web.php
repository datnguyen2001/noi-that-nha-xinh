<?php

use App\Http\Controllers\web\BoSuuTapController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\DuAnController;
use App\Http\Controllers\web\NoiThatTanCoDienController;
use App\Http\Controllers\web\NoiThatGoOcChoController;
use App\Http\Controllers\web\PhongThoController;
use App\Http\Controllers\web\VideoController;
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
Route::get('menu/{slug}', [NoiThatGoOcChoController::class, 'menu'])->name('menu');
Route::get('danh-muc/{slug}', [NoiThatGoOcChoController::class, 'category'])->name('category');
Route::get('danh-muc-san-pham/{slug}', [NoiThatGoOcChoController::class, 'categoryProduct'])->name('category-product');
Route::get('/product-detail/{slug}', [NoiThatGoOcChoController::class, 'productDetails'])->name('product-detail');

Route::group(['prefix' => 'du-an', 'as' => 'du-an.'], function () {
    Route::get('/', [DuAnController::class, 'duAn'])->name('index');
    Route::get('/{slug}', [DuAnController::class, 'details'])->name('details');
});

Route::group(['prefix' => 'bo-suu-tap', 'as' => 'bo-suu-tap.'], function () {
    Route::get('/', [BoSuuTapController::class, 'boSuuTap'])->name('index');
    Route::get('/{slug}', [BoSuuTapController::class, 'collection'])->name('collection');
});

Route::get('/tin-tuc' , [HomeController::class, 'tinTuc'])->name('tin-tuc');
Route::get('/gioi-thieu', [HomeController::class, 'gioiThieu'])->name('gioi-thieu');
Route::get('/phong-cach-noi-that-go-oc-cho', [HomeController::class, 'phongCachNoiThat'])->name('phong-cach-noi-that');
Route::get('/product-details', [HomeController::class, 'productDetails'])->name('product-details');
Route::get('/khuyen-mai-details', [HomeController::class, 'khuyenMaiDetails'])->name('khuyen-mai-details');
Route::get('/support/{slug}', [HomeController::class, 'supportSlug'])->name('support.slug');

Route::post('/dang-ky-nhan-thong-tin', [ContactController::class, 'submitForm'])->name('dang-ky.submit');
Route::get('/video-detail/{slug}', [VideoController::class, 'videoDetail'])->name('video-detail');
Route::get('du-an-details/{slug}', [DuAnController::class, 'duAnDetails'])->name('du-an-details');
Route::get('bo-suu-tap-details/{slug}', [BoSuuTapController::class, 'boSuuTapDetails'])->name('bo-suu-tap-details');
