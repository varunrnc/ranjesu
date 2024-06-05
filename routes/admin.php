<?php

use App\Http\Controllers\Admin\Article\AdminEnglishArticleController;
use App\Http\Controllers\Admin\Article\AdminHindiArticleController;
use App\Http\Controllers\Admin\Blog\AdminBlogController;
use App\Http\Controllers\Admin\Gallery\AdminGalleryController;
use App\Http\Controllers\Admin\Gallery\AdminVideoGalleryController;
use App\Http\Controllers\Admin\NewsEvents\AdminNewsEventsController;
use App\Http\Controllers\Admin\Page\AdminPageController;
use App\Http\Controllers\Admin\Permission\AdminPermissionController;
use App\Http\Controllers\Admin\Slider\AdminSliderController;
use App\Http\Controllers\Admin\Team\AdminTeamController;
use App\Http\Controllers\Admin\User\AdminUserController;
use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';

Route::prefix('admin')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::controller(AdminSliderController::class)->group(function() {
            Route::get('/slider', 'index')->name('admin.slider');
            Route::get('/slider/create', 'create')->name('admin.slider.create');
            Route::post('/slider/store', 'store')->name('admin.slider.store');
        });
        Route::get('/newsevents', [AdminNewsEventsController::class, 'index'])->name('admin.newsevents');
        Route::get('/gallery', [AdminGalleryController::class, 'index'])->name('admin.gallery');
        Route::get('/video-gallery', [AdminVideoGalleryController::class, 'index'])->name('admin.video.gallery');
        Route::get('/blog', [AdminBlogController::class, 'index'])->name('admin.blog');
        Route::get('/articles-english', [AdminEnglishArticleController::class, 'index'])->name('admin.english.article');
        Route::get('/articles-hindi', [AdminHindiArticleController::class, 'index'])->name('admin.hindi.article');
        Route::get('/team', [AdminTeamController::class, 'index'])->name('admin.team');
        Route::get('/page', [AdminPageController::class, 'index'])->name('admin.page');
        Route::get('/user', [AdminUserController::class, 'index'])->name('admin.user');
        Route::get('/permission', [AdminPermissionController::class, 'index'])->name('admin.permission');
    });
});


