<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlipBookController;
use App\Http\Controllers\Manga\ChapterController;
use App\Http\Controllers\Manga\GenreController;
use App\Http\Controllers\Manga\KomikController;
use App\Http\Controllers\Video\VideoController;
use App\Http\Controllers\Website\MajalahController;
use App\Http\Controllers\Website\VideoController as WebsiteVideoController;
use App\Http\Controllers\Website\WebsiteController;
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

Route::get("/home",function() {
    return redirect()->route("home");
});

Auth::routes();

Route::get('/', [WebsiteController::class,'index'])->name('web');
Route::get("global-search",[WebsiteController::class,'globalSearch'])->name('global.search'); 

Route::prefix('majalah')->group(function() {
    Route::get("/",[MajalahController::class,'index'])->name('website.majalah');
    Route::get("/detail/{id}/{any}",[MajalahController::class,'detail'])->name('majalah.detail');
    Route::get("/category/{id}/{any}",[MajalahController::class,'category'])->name('majalah.category');
    Route::post("load-more",[MajalahController::class,'loadMore']);
    Route::get("/pencarian",[MajalahController::class,'search'])->name("majalah.search");
});

Route::prefix('video')->group(function() {
    Route::get("/",[WebsiteVideoController::class,'index'])->name('web.video');
    Route::get("/{id}/{any}",[WebsiteVideoController::class,'detail'])->name('web.video_detail');
    Route::get("/category/{id}/{any}",[WebsiteVideoController::class,'category'])->name('web.video_category');
    Route::post("load-more",[WebsiteVideoController::class,'loadMore']);
    Route::get("/pencarian",[WebsiteVideoController::class,'search'])->name("video.search");
});



