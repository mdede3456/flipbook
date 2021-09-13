<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlipBookController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BannerController;
use App\Http\Controllers\Frontend\PolicyController;
use App\Http\Controllers\Frontend\SettingsController;
use App\Http\Controllers\Frontend\SliderController;
use App\Http\Controllers\Frontend\TermController;
use App\Http\Controllers\Manga\ChapterController;
use App\Http\Controllers\Manga\GenreController;
use App\Http\Controllers\Manga\KomikController;
use App\Http\Controllers\Video\VideoController;
use App\Http\Controllers\Website\WebsiteController;
use App\Models\Flipbook\CategoryFlipbook;
use App\Models\Manga\Chapter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function() {

    // General Route
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get("/dashboard",[AdminController::class,'index'])->name('dashboard');
    Route::get("/profile",[AdminController::class,'profile'])->name('profile');
    Route::post("/profile-store",[AdminController::class,'profileStore'])->name('profile.store');

    // Category Route
    Route::prefix('category')->group(function() {
        Route::get("/",[CategoryFlipbook::class,'index'])->name('category');
        Route::get("/create",[CategoryFlipbook::class,'create'])->name('category.create');
        Route::get("/update/{id}",[CategoryFlipbook::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoryFlipbook::class,'delete'])->name('category.delete');
        Route::post("store/{any}",[CategoryFlipbook::class,'store'])->name('category.store');
    });

    // Flipbook Route
    Route::prefix('flipbook')->group(function() {
        Route::get('create',[FlipBookController::class,'create'])->name('flipbook.create');
        Route::get("list",[FlipBookController::class,'index'])->name('flipbook');
        Route::get('update/{id}',[FlipBookController::class,'update'])->name('flipbook.update');
        Route::get("delete/{id}",[FlipBookController::class,'delete'])->name('flipbook.delete');
        Route::post("store/{any}",[FlipBookController::class,'store'])->name('flipbook.store');
        Route::get("detail/{id}",[FlipBookController::class,'detail'])->name('flipbook.detail');
    });

    // Video Route
    Route::prefix('video')->group(function() {
        Route::get('create',[VideoController::class,'create'])->name('video.create');
        Route::get("list",[VideoController::class,'index'])->name('video');
        Route::get('update/{id}',[VideoController::class,'update'])->name('video.update');
        Route::get("delete/{id}",[VideoController::class,'delete'])->name('video.delete');
        Route::post("store/{any}",[VideoController::class,'store'])->name('video.store');
    });

    // Genre Manga
    Route::prefix('genre')->group(function() {
        Route::get("/",[GenreController::class,'index'])->name('genre');
        Route::get("/delete/{id}",[GenreController::class,'delete'])->name('genre.delete');
        Route::post("store/{any}",[GenreController::class,'store'])->name('genre.store');
    });

    // Komik Route
    Route::prefix('manga')->group(function() {
        Route::get("/list",[KomikController::class,'index'])->name('komik');
        Route::get("/create",[KomikController::class,'create'])->name('komik.create');
        Route::get("/update/{id}",[KomikController::class,'update'])->name('komik.update');
        Route::get("/delete/{id}",[KomikController::class,'delete'])->name('komik.delete');
        Route::get("/detail/{id}",[KomikController::class,'detail'])->name('komik.detail');
        Route::post("/store/{any}",[KomikController::class,'store'])->name('komik.store');
    });

    // Chapter Route
    Route::prefix('chapter')->group(function() {
        Route::post("store/{any}",[ChapterController::class,'store'])->name('chapter.store');
        Route::get("detail/{id}",[ChapterController::class,'detail'])->name('chapter.detail');
        Route::get("get-image/{id}",[ChapterController::class,'getimage']);
        Route::get("delete/{id}",[ChapterController::class,'delete'])->name('chapter.delete');
    });

    // Slider Route
    Route::prefix('slider')->group(function() {
        Route::get('/',[SliderController::class,'index'])->name('slider.index');
        Route::get('create',[SliderController::class,'create'])->name('slider.create');
        Route::get('update/{id}',[SliderController::class,'update'])->name('slider.update');
        Route::get('delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
        Route::post("store/{any}",[SliderController::class,'store'])->name('slider.store');
    });

    // Banner Route
    Route::prefix('banner')->group(function() {
        Route::get('/',[BannerController::class,'index'])->name('banner.index');
        Route::get('create',[BannerController::class,'create'])->name('banner.create');
        Route::get('update/{id}',[BannerController::class,'update'])->name('banner.update');
        Route::get('delete/{id}',[BannerController::class,'delete'])->name('banner.delete');
        Route::post("store/{any}",[BannerController::class,'store'])->name('banner.store');
    });

    // Settings
    Route::prefix('pengaturan')->group(function() {
        Route::get("/",[SettingsController::class,'index'])->name('admin.settings');
        Route::post("/store",[SettingsController::class,'store'])->name('settings.store');
    });

    // About Route
    Route::prefix('about-sett')->group(function() {
        Route::get('/',[AboutController::class,'index'])->name('admin.about');
        Route::post("/store",[AboutController::class,'store'])->name('about.store');
    });

    // Term Condition
    Route::prefix('term-sett')->group(function() {
        Route::get("/",[TermController::class,'index'])->name('admin.term');
        Route::post("store",[TermController::class,'store'])->name('term.store');
    });

    // Policy Route
    Route::prefix('policy-sett')->group(function() {
        Route::get("/",[PolicyController::class,'index'])->name('admin.policy');
        Route::post("/store",[PolicyController::class,'store'])->name('policy.store');
    });

});