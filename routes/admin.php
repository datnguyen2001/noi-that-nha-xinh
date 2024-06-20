<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\LoginController;
use \App\Http\Controllers\admin\DashboardController;
use \App\Http\Controllers\BannerController;
use \App\Http\Controllers\admin\VideoController;
use \App\Http\Controllers\admin\NewController;
use \App\Http\Controllers\admin\CollectionController;
use \App\Http\Controllers\admin\ProjectController;
use \App\Http\Controllers\admin\ContactController;
use \App\Http\Controllers\admin\SettingController;
use \App\Http\Controllers\admin\CommentController;
use \App\Http\Controllers\admin\CategoryController;
use \App\Http\Controllers\admin\ProductController;
use \App\Http\Controllers\admin\SupportController;


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/dologin', [LoginController::class, 'doLogin'])->name('doLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('check-admin-auth')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');

    Route::prefix('banner')->name('banner.')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::get('create', [BannerController::class, 'create'])->name('create');
        Route::post('store', [BannerController::class, 'store'])->name('store');
        Route::get('delete/{id}', [BannerController::class, 'delete']);
        Route::get('edit/{id}', [BannerController::class, 'edit']);
        Route::post('update/{id}', [BannerController::class, 'update']);
    });

    Route::prefix('video')->name('video.')->group(function () {
        Route::get('/', [VideoController::class, 'index'])->name('index');
        Route::get('create', [VideoController::class, 'create'])->name('create');
        Route::post('store', [VideoController::class, 'store'])->name('store');
        Route::get('delete/{id}', [VideoController::class, 'delete']);
        Route::get('edit/{id}', [VideoController::class, 'edit']);
        Route::post('update/{id}', [VideoController::class, 'update']);
    });

    Route::prefix('new')->name('new.')->group(function () {
        Route::get('/', [NewController::class, 'index'])->name('index');
        Route::get('create', [NewController::class, 'create'])->name('create');
        Route::post('store', [NewController::class, 'store'])->name('store');
        Route::get('delete/{id}', [NewController::class, 'delete']);
        Route::get('edit/{id}', [NewController::class, 'edit']);
        Route::post('update/{id}', [NewController::class, 'update']);
    });

    Route::prefix('collection')->name('collection.')->group(function () {
        Route::get('/', [CollectionController::class, 'index'])->name('index');
        Route::post('store', [CollectionController::class, 'store'])->name('store');
        Route::post('update/{id}', [CollectionController::class, 'update'])->name('update');
        Route::get('delete/{id}', [CollectionController::class, 'delete']);

        Route::get('info', [CollectionController::class, 'info'])->name('info');
        Route::get('create-info', [CollectionController::class, 'createInfo'])->name('create-info');
        Route::post('store-info', [CollectionController::class, 'storeInfo'])->name('store-info');
        Route::get('edit-info/{id}', [CollectionController::class, 'editInfo']);
        Route::post('update-info/{id}', [CollectionController::class, 'updateInfo'])->name('update-info');
        Route::get('delete-info/{id}', [CollectionController::class, 'deleteInfo']);
        Route::post('delete-img-collection', [CollectionController::class, 'deleteImg']);
    });

    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
        Route::post('store', [ProjectController::class, 'store'])->name('store');
        Route::post('update/{id}', [ProjectController::class, 'update'])->name('update');
        Route::get('delete/{id}', [ProjectController::class, 'delete']);

        Route::get('info', [ProjectController::class, 'info'])->name('info');
        Route::get('create-info', [ProjectController::class, 'createInfo'])->name('create-info');
        Route::post('store-info', [ProjectController::class, 'storeInfo'])->name('store-info');
        Route::get('edit-info/{id}', [ProjectController::class, 'editInfo']);
        Route::post('update-info/{id}', [ProjectController::class, 'updateInfo'])->name('update-info');
        Route::get('delete-info/{id}', [ProjectController::class, 'deleteInfo']);
        Route::post('delete-img-project', [ProjectController::class, 'deleteImg']);
    });

    Route::prefix('contact_us')->name('contact_us.')->group(function () {
        Route::get('', [ContactController::class, 'index'])->name('index');
        Route::post('update', [ContactController::class, 'save'])->name('update');
    });

    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('', [SettingController::class, 'index'])->name('index');
        Route::post('update', [SettingController::class, 'save'])->name('update');
    });

    Route::prefix('comment')->name('comment.')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('index');
        Route::get('create', [CommentController::class, 'create'])->name('create');
        Route::post('store', [CommentController::class, 'store'])->name('store');
        Route::get('delete/{id}', [CommentController::class, 'delete']);
        Route::get('edit/{id}', [CommentController::class, 'edit']);
        Route::post('update/{id}', [CommentController::class, 'update']);
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('delete/{id}', [CategoryController::class, 'delete']);
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::post('get-children-c2', [CategoryController::class, 'getChildrenC2']);
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('edit/{id}', [ProductController::class, 'edit']);
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('delete/{id}', [ProductController::class, 'delete']);
        Route::post('delete-img-product', [ProductController::class, 'deleteImg']);
    });

    Route::prefix('customer_support')->name('customer_support.')->group(function () {
        Route::get('', [SupportController::class, 'index'])->name('index');
        Route::get('create', [SupportController::class, 'create'])->name('create');
        Route::post('store', [SupportController::class, 'store'])->name('store');
        Route::get('edit/{id}', [SupportController::class, 'edit']);
        Route::post('update/{id}', [SupportController::class, 'update'])->name('update');
        Route::get('delete/{id}', [SupportController::class, 'delete']);
    });

});

Route::post('ckeditor/upload', [DashboardController::class, 'upload'])->name('ckeditor.image-upload');
