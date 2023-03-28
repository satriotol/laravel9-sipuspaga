<?php

use App\Http\Controllers\BeritaCategoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonsultasiCategoryController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\KonsultasiStatusController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\BeritaController;
// URL_CRUD_GENERATOR
use App\Http\Controllers\KonsultasiCategoryNetworkController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EbookController;
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

Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('berita', [HomeController::class, 'berita'])->name('berita');
Route::get('berita/detail/{beritum}', [HomeController::class, 'detailBerita'])->name('detailBerita');
Route::get('ebook', [HomeController::class, 'ebook'])->name('ebook');
Route::get('galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('galeri/detail/{gallery}}', [HomeController::class, 'detailGaleri'])->name('detailGaleri');
Route::post('upload/store', [UploadController::class, 'store'])->name('upload.store');
Route::delete('revert/image', [UploadController::class, 'revert'])->name('upload.revert');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    // Route::get('/', function () {
    //     return view('backend_layouts.main');
    // })->name('dashboard');
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('konsultasi', KonsultasiController::class);
    Route::resource('konsultasiStatus', KonsultasiStatusController::class);
    Route::resource('konsultasiCategory', KonsultasiCategoryController::class);
    Route::resource('status', StatusController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('verification', VerificationController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('beritaCategory', BeritaCategoryController::class);
    Route::resource('link', LinkController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('crud', CrudController::class);
    // CRUD_GENERATOR
Route::resource('konsultasi_category_network', KonsultasiCategoryNetworkController::class);
    Route::resource('network', NetworkController::class);
    Route::resource('page', PageController::class);
    Route::get('pelapor', [UserController::class, 'pelapor'])->name('user.pelapor');
    Route::resource('gallery_image', GalleryImageController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('ebook', EbookController::class);
    Route::resource('berita', BeritaController::class);
    Route::get('verification/test/updateOtp', [VerificationController::class, 'updateOtp'])->name('verification.updateOtp');

    Route::get('user/resetPassword/{user}', [UserController::class, 'reset_password'])->name('user.resetPassword');
});
require __DIR__ . '/auth.php';
