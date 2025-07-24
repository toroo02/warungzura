<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MenuItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini dimuat oleh RouteServiceProvider dan semuanya akan
| ditugaskan ke grup middleware "web".
|
*/

// Menggunakan PageController untuk menangani rute halaman statis
// ->name() digunakan untuk memberi nama pada rute, memudahkan pemanggilan di view
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/cerita', [PageController::class, 'about'])->name('about');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/pembaruan-kami', [PageController::class, 'news'])->name('news');
Route::get('/pembaruan-kami/detail', [PageController::class, 'newsDetail'])->name('news.detail');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::prefix('admin')->name('admin.')->group(function () {
    
    // Alihkan halaman utama admin ke daftar menu
    Route::get('/', function () {
        return redirect()->route('admin.menu.index');
    });

    // Rute Resource untuk Menu Items CRUD
    // Ini secara otomatis membuat semua rute yang dibutuhkan untuk CRUD
    Route::resource('menu', MenuItemController::class);

});
// Contoh rute untuk memproses form reservasi di masa depan
// Route::post('/reservasi', [BookingController::class, 'store'])->name('booking.store');
